<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function page() {
        return $this->belongsTo('App\Page');
    }
}
