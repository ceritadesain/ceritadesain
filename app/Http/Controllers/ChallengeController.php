<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::all();

        return view('challenge.index', compact('challenges'));
    }

    public function show($id)
    {
        $challenge = Challenge::findOrFail($id);

        return view('challenge.show', compact('challenge'));
    }
}