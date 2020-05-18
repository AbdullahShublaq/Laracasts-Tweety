<?php

namespace App\Policies;

use App\Tweet;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy
{
    use HandlesAuthorization;

    public function destroy(User $currentUser, Tweet $tweet)
    {
        //
        return $currentUser->is($tweet->user);
    }
}
