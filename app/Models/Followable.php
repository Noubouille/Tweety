<?php


namespace App\Models;


trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, "follows", "user_id", "following_user_id");
    }

    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function toggleFollow(User $user)
    {

        $this->follows()->toggle($user);

//        if ($this->isFollowing($user))
//        {
//            return $this->unfollow($user);
//        }
//
//        return $this->follow($user);
    }
}
