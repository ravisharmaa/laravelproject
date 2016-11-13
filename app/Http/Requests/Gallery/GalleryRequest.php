<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    protected $rules= 
    [
        'title'=>'required',
        'rank' =>'required',
        'image' =>'required|mimes:jpeg,gif,jpg,svg,png'

    ];
    

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    

    public function rules()
    {
       return $this->rules;
    }

    public function messages()
    {
        return [
            'title.required'=>'The title must not be empty',
            'rank.required' => 'The rank is required',
            'image.required' => 'The Image is required and of correct extension i.e. jpg,svg,png,gif'      
        ];
    }
}
