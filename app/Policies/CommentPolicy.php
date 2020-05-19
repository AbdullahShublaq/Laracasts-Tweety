<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    //allow just to friends to comment

    public function destroy(User $currentUser, Comment $comment)
    {
        //
        return ($currentUser->is($comment->user) || $currentUser->is($comment->tweet->user));
    }
}
