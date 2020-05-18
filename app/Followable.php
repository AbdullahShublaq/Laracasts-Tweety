<?php
/**
 * Created by PhpStorm.
 * User: jit
 * Date: 17/05/2020
 * Time: 03:07 م
 */

namespace App;


trait Followable
{
    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }

    public function following($user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
}