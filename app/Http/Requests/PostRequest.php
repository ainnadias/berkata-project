<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    // @return bool

    public function authorized()
    {
        return true;
    }

    // @return array

    public function rules()
    {
        return [
           'name'=> 'required', 
           'email'=> 'required', 
           'date'=> 'required', 
           'description'=> 'required'  
        ];
    }
}
