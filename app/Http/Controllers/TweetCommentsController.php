<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Tweet;
use Illuminate\Http\Request;

class TweetCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param Tweet $tweet
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Tweet $tweet, Request $request)
    {
        //
        $attributes = $request->validate([
            'comment_body' => 'required|max:191',
        ]);

        $tweet->comment(auth()->user(), $attributes['comment_body']);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
     * @param Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tweet $tweet, Comment $comment)
    {
        //
        $tweet->removeComment($comment);
        return back();
    }
}
