<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /**
     * Bookを取得
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
    
   public function language()
    {
        return $this->belongsTo('App\Language');
    }
   
   public function words()
    {
        return $this->belongsTo('App\User');
    }
   
   protected $fillable = [
        'content',
        'Japanese',
        'language',
        ];
   
}