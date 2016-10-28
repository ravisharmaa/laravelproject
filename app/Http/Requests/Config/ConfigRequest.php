<?php

namespace App\Http\Requests\Config;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    protected $rules= [
            'facebook' => 'required',
            'address'  =>  'required',
            'about_desc' => 'required',
            'twitter'   =>  'required',
            'mail'     =>  'required',
            'gplus'     =>  'required'
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
        return[
            'facebook.required' => 'Please enter the Facebook Link.',
            'address.required'  =>  'Please give the Address.',
            'about_desc.required'        =>  'Please give the Description.',
            'twitter.required'      =>  'Please enter the Twitter Link.',
            'gplus.required'    =>  'The GooglePlus link is needed.'
        ];
    }
}
