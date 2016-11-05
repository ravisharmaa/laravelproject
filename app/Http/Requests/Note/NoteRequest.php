<?php

namespace App\Http\Requests\Note;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    
    protected $rules=[
        'title'         =>'required',
        'description'   =>'required',
        'rank'          =>'required'
    ];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
        return[
        'title.required'        => 'Please Input the Title',
        'description.required'  =>  'Please Input the description',
        'rank.required'         =>  'Please Input the rank'
        ];  
    }

}
