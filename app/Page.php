<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
      'story_id',
      'author',
      'public',
      'page_no',
      'page_start',
      'page_end',
      'question',
      'explanation',
      'choice1',
      'choice2',
      'video_id',
      'video_start',
      'video_stop',
    ];

    public function story(){
        return $this->belongsTo('App\Story');
    }
}
