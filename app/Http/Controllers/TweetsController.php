<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request);
        $attributes = $request->validate([
            'body' => 'required|max:191',
            'image' => 'nullable|image',
        ]);

        if ($request->image) {
            $attributes['image'] = $request->image->store('tweet_images');
        }

        $result = Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body'],
            'image' => $attributes['image'] ?? NULL
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param Tweet $tweet
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Tweet $tweet)
    {
        //
        return view('tweets.show', [
            'tweet' => Tweet::where('id', $tweet->id)
                ->withLikes()
                ->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tweet $tweet
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Tweet $tweet)
    {
        //
        $tweet->delete();

        return back();
    }
}
