<?php
/**
 * Created by PhpStorm.
 * User: jit
 * Date: 18/05/2020
 * Time: 02:02 ص
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id');
    }

    public function dislike($user = NULL)
    {
        return $this->like($user, FALSE);
    }

    public function like($user = NULL, $liked = TRUE)
    {
        if ($this->isLikedBy($user) || $this->isDislikedBy($user)) {
            $this->deleteLike($user);
        } else {
            $this->likes()->updateOrCreate(
                [
                    'user_id' => $user ? $user->id : auth()->id(),
                ],
                [
                    'liked' => $liked,
                ]
            );
        }
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', TRUE)->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', FALSE)->count();
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}