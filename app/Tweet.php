<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;
    use Commendable;

    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : FALSE;
    }

}
