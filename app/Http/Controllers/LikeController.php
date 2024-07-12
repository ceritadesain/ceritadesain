<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\Answer;
use App\Models\Reply;


class LikeController extends Controller
{
    public function discussionLike(string $discussionSlug){
        // get discussion berdasarkan slug dari paramter 
        // like discussion dengan model tadi
        // return json
        // isi jsonnya adalah likeCount / total semua like dari discussion tsb

        $discussion = Discussion::where('slug', $discussionSlug)->first();

        $discussion->like();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $discussion->likeCount,
            ],
        ]);
        
    }
      public function discussionUnlike(string $discussionSlug){
        // get discussion berdasarkan slug dari paramter 
        // unlike discussion dengan model tadi
        // return json
        // isi jsonnya adalah likeCount / total semua like dari discussion tsb
        $discussion = Discussion::where('slug', $discussionSlug)->first();

        $discussion->unlike();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $discussion->likeCount,
            ],
        ]);
        
    }

    public function answerLike(string $answerId){
        $answer = Answer::find($answerId);

        $answer->like();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $answer->likeCount,
            ]
        ]);
    }

    public function answerUnlike(string $answerId){
         $answer = Answer::find($answerId);

        $answer->unlike();

        return response()->json([
                'status' => 'success',
                'data' => [
                    'likeCount' => $answer->likeCount,
                ]
        ]);
    }
    public function replyLike(string $replyId)
    {
        $reply = Reply::find($replyId);


        $reply->like();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $reply->likeCount,
            ]
        ]);
    }

    public function replyUnlike(string $replyId)
    {
        $reply = Reply::find($replyId);

        if (!$reply) {
            return response()->json([
                'status' => 'error',
                'message' => 'Balasan tidak ditemukan.'
            ], 404);
        }

        $reply->unlike();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $reply->likeCount,
            ]
        ]);
    }
}