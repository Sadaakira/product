<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * このBookを所有するWordを取得
     */
    public function words()
    {
        return $this->hasMany('App\Word');
    }
    
    protected $fillable = [
        'title',
        'author',
        ];
    
    
}
