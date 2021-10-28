<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    
    use SoftDeletes;
    
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
