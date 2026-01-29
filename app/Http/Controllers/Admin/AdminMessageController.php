<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index(Request $request)
    {
        $query = Message::orderBy('created_at', 'desc');

        if ($request->filled('status')) { // 'read' atau 'unread'
            $query->where('status', $request->status);
        }

        if ($request->filled('sender')) {
            $query->where('name', 'like', '%' . $request->sender . '%');
        }

        if ($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->from);
        }
        if ($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->to);
        }

        $messages = $query->paginate(10)->withQueryString();

        return view('dashboard.admin.pages.pesan', compact('messages'));
    }


    public function markAsRead($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'read';
        $message->save();

        return response()->json([
            'success' => true,
            'status' => 'read'
        ]);
    }
    public function markAsUnread($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'unread';
        $message->save();

        return response()->json([
            'success' => true,
            'status' => 'unread'
        ]);
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages')->with('success', 'Pesan berhasil dihapus');
    }

}
