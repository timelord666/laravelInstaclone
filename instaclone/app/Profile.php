<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profileImage() {
        $path = '/storage/';
        $link = $this->image ? $this->image : 'profile/No_image_available.svg';
        return $path . $link;
    }


    public function followers() {
       return $this->belongsToMany(User::class);
    }
}
