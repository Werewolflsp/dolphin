<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    /**
     * Get the user that posted this post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get all of the replies of this post.
     */
    public function posts()
    {
        return $this->hasMany(ForumReply::class);
    }
}
