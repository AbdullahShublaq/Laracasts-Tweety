<?php
/**
 * Created by PhpStorm.
 * User: jit
 * Date: 19/05/2020
 * Time: 03:20 م
 */

namespace App;


trait Commendable
{

    public function comment($user = NULL, $body = '')
    {
        $this->comments()->Create(
            [
                'user_id' => $user ? $user->id : auth()->id(),
                'body' => $body,
            ]
        );
    }

    public function removeComment($comment = NULL)
    {
        $this->comments()->where('id', $comment->id)->delete();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}