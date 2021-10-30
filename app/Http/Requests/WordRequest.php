<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'word.content' => 'required|string|max:100',
            'word.Japanese' => 'required|string|max:100',
        ];
    }
    
}
