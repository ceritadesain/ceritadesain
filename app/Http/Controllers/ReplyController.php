<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;

class ReplyController extends Controller
{
    public function store(Request $request, $answer_id)
    {
        $request->validate([
            'reply_content' => 'required|string',
        ]);

        $reply = new Reply();
        $reply->answer_id = $answer_id;
        $reply->user_id = auth()->id();
        $reply->reply_content = $request->reply_content;
        $reply->save();

        return back()->with('success', 'Balasan berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $reply = Reply::findOrFail($id);
        $reply->delete();

        return back()->with('success', 'Balasan berhasil dihapus.');
    }
}