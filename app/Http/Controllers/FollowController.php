<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowController extends Controller
{
 public function follow(User $user)
    {
        $currentUser = auth()->user();

        if ($currentUser->id === $user->id) {
            return response()->json(['message' => 'Kamu tidak dapat mengikuti dirimu sendiri.'], 403);
        }

        if (!$currentUser->isFollowing($user)) {
            $currentUser->follow($user);
            return response()->json(['message' => 'Kamu sekarang mengikuti ' . $user->username]);
        }

        return response()->json(['message' => 'Kamu sudah mengikuti ' . $user->username], 400);
    }

    public function unfollow(User $user)
    {
        $currentUser = auth()->user();

        if ($currentUser->id === $user->id) {
            return response()->json(['message' => 'Kamu tidak dapat berhenti mengikuti dirimu sendiri'], 403);
        }

        if ($currentUser->isFollowing($user)) {
            $currentUser->unfollow($user);
            return response()->json(['message' => 'Kamu telah berhenti mengikuti ' . $user->username]);
        }

        return response()->json(['message' => 'Kamu tidak mengikuti ' . $user->username], 400);
    }
}