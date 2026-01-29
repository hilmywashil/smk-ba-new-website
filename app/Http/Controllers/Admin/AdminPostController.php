<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use Storage;

class AdminPostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $posts = $query->orderBy('created_at', 'desc')->paginate(15)->withQueryString();

        return view('dashboard.admin.pages.berita', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.admin.pages.create.create-berita');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:news,activities',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $slug = $data['slug'];
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $data['slug'] . '-' . $count;
            $count++;
        }
        $data['slug'] = $slug;

        if ($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image = $manager->read($request->file('image'));

            $filename = $data['slug'] . '.webp';
            $path = storage_path('app/public/posts/' . $filename);

            $image->scaleDown(width: 1200);

            $image->toWebp(80)->save($path);

            $data['image'] = 'posts/' . $filename;
        }

        $data['author_id'] = Auth::id();

        Post::create($data);

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('dashboard.admin.pages.edit.edit-berita', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'content' => 'required|string',
            'category' => 'required|in:news,activities',
            'status' => 'required|in:draft,published',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {

            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }

            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image'));

            $filename = $data['slug'] . '.webp';
            $path = storage_path('app/public/posts/' . $filename);

            $image->scaleDown(width: 1200);

            $image->toWebp(80)->save($path);

            $data['image'] = 'posts/' . $filename;
        }

        $post->update($data);

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
