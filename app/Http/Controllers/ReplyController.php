<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateReplyRequest;
use App\Http\Requests\StoreReplyRequest;
use App\Models\Discussion;
use App\Models\Answer;
use App\Models\Reply;

class ReplyController extends Controller
{
       public function store(StoreReplyRequest $request, $answer_id)
    {
        $validated = $request->validated();

        // Find the associated answer
        $answer = Answer::findOrFail($answer_id);

        // Create a new reply instance
        $reply = new Reply();
        $reply->answer_id = $answer_id;
        $reply->user_id = auth()->id();
        $reply->reply_content = $validated['reply_content'];

        // Assign the discussion_id from the associated answer
        // $reply->discussion_id = $answer->discussion_id;

        // Save the reply
        $reply->save();
         
        session()->flash('notif.success', 'Balasan berhasil ditambahkan!');

        return back()->with('success', 'Balasan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $reply = Reply::find($id);

     
        if (!$reply) {
            return abort(404);
        }

        
        if ($reply->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        
        return view('pages.replies.form', [
            'reply' => $reply,
        ]);
    }

    public function update(UpdateReplyRequest $request, $id)
{
    $reply = Reply::find($id);

    
    if (!$reply) {
        return abort(404);
    }

    
    if ($reply->user_id !== auth()->id()) {
        abort(403, 'Unauthorized action.');
    }

    
    $validated = $request->validated();

    
    $reply->update($validated);

    
    $answer = $reply->answer;

    if ($answer) {
        session()->flash('notif.success', 'Balasan berhasil diperbarui!');
        return redirect()->route('discussions.show', $answer->discussion->slug)
            ->with('success', 'Balasan berhasil diperbarui.');
    } else {
        return redirect()->back()->with('error', 'Tidak dapat menemukan diskusi terkait.');
    }
}


    public function destroy($id)
    {
        $reply = Reply::findOrFail($id);

        // Check if the reply belongs to the authenticated user
        if ($reply->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $reply->delete();
        session()->flash('notif.success', 'Balasan berhasil dihapus!');

        return back()->with('success', 'Balasan berhasil dihapus.');
    }
}