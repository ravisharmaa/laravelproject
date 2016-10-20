<?php

namespace App\Http\Requests\ToDo;

use Illuminate\Foundation\Http\FormRequest;

class ToDoCreateRequest extends FormRequest
{
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
        $rules=
        [
            'title'         =>'required',
            'description'   =>'required',
            'rank'          =>'required',
        ];
       

        if($this->todo)
        {
            $rules=
            [
                'title'=>'required',
                'rank'  =>  'required'
            ];
        }
        return $rules;
    }


    public function messages()
    {
        return [
            'title.title'                   => 'Title is required and must be unique',
            'description.description'       =>  ' Description is required',
            'rank.rankk'                    =>  'Rank is required'
        ];
    }
}
