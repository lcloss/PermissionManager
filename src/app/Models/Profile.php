<?php

namespace Backpack\PermissionManager\app\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatar', 'birthdate', 'resume', 'facebook_url', 'linkedin_url', 'twitter_url', 'instagram_url', 'youtube_url'];

    public function getAvatarAttribute($avatar) 
    {
        return asset($avatar);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
