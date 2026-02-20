<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AdminHeroesController extends Controller
{
    public function create()
    {
        return view('dashboard.admin.pages.create.create-hero');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
        ]);

        if ($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');

            $image = $manager->read($file);

            $extension = $file->getClientOriginalExtension();

            $filename = 'hero_image.' . $extension;

            $directory = storage_path('app/public/hero');

            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $path = $directory . '/' . $filename;

            $image->scaleDown(width: 1200);

            $image->save($path);

            $data['image'] = 'hero/' . $filename;
        }


        Hero::create($data);

        return redirect()->route('admin.home')
            ->with('success', 'Data hero berhasil ditambahkan!');
    }

    public function edit(Hero $hero)
    {
        return view('dashboard.admin.pages.edit.edit-hero', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
        ]);

        if ($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');

            $image = $manager->read($file);

            $extension = $file->getClientOriginalExtension();

            $filename = 'hero_image.' . $extension;

            $directory = storage_path('app/public/hero');

            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $path = $directory . '/' . $filename;

            $image->scaleDown(width: 1200);

            $image->save($path);

            if ($hero->image && $hero->image !== 'hero/' . $filename) {
                $oldPath = storage_path('app/public/' . $hero->image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $data['image'] = 'hero/' . $filename;
        }

        $hero->update($data);

        return redirect()->route('admin.home')
            ->with('success', 'Data hero berhasil diperbarui!');
    }

    public function destroy(Hero $hero)
    {
        if ($hero->image) {
            $path = storage_path('app/public/' . $hero->image);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $hero->delete();

        return redirect()->route('admin.home')
            ->with('success', 'Data hero berhasil dihapus!');
    }


}
