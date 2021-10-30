<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Word extends Model
{
    // use SoftDeletes;
    
    
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
        'language_id',
        'book_id',
        'user_id',
        ];
   
}