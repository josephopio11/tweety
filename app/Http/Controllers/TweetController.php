<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = auth()->user()->timeline();

        return view('tweets.index', compact('tweets'));
    }

    public function store(Request $request)
    {
        $post = $request->validate([
            'body' => 'required|max:255'
        ]);
        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $post['body'],
        ]);

        return redirect()->route('dashboard');
    }
}
