<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Discussion; 
use App\Models\Answer;
use Illuminate\Support\Facades\DB; // Import DB untuk menggunakan fungsi SQL di Laravel


class PopularDiscussionController extends Controller
{
    public function index(Request $request)
    {
        $discussions = Discussion::with('user', 'category');

        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                        ->orWhere('content', 'like', "%$request->search%");
        }

        // Menggunakan subquery untuk menghitung jumlah jawaban
        $discussions->leftJoin('likeable_like_counters as lc', function ($join) {
            $join->on('discussions.id', '=', 'lc.likeable_id')
                 ->where('lc.likeable_type', '=', Discussion::class);
        })
        ->leftJoin(DB::raw('(SELECT discussion_id, COUNT(id) AS answer_count FROM answers GROUP BY discussion_id) AS a'), 'discussions.id', '=', 'a.discussion_id')
        ->selectRaw('discussions.*, COALESCE(lc.count, 0) as like_count, COALESCE(a.answer_count, 0) as answer_count')
        ->orderByDesc('like_count')
        ->orderByDesc('answer_count');


        // Lakukan paginate dengan query string yang disertakan
        $discussions = $discussions->paginate(10)->appends($request->query());

        return response()->view('pages.popular-discussions.index', [
            'discussions' => $discussions,
            'categories' => Category::all(),
            'search' => $request->search,
        ]);
    }

     public function show(string $slug)
    {
       $discussion = Discussion::with(['user', 'category'])->where('slug',$slug)->first();

         if(!$discussion){
            return abort(404);
        }
        $discussionAnswers = Answer::where('discussion_id', $discussion->id)->orderBy('created_at', 'desc')->paginate(5);

        $LikedImage = url('assets/images/like-heart.png');
        $notLikedImage = url('assets/images/unlike-heart.png');

        return response()->view('pages.discussions.show', [
            'discussion' => $discussion,
            'categories' => Category::all(),
            'likedImage' => $LikedImage,
            'notLikedImage' =>  $notLikedImage,
            'discussionAnswers' =>  $discussionAnswers,
        ]);
    }

}