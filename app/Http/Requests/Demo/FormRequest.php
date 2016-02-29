<?php

namespace App\Http\Requests\Demo;

use App\Http\Requests\Request;

class FormRequest extends Request
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


    public function messages(){
        return [
            'name' => 'A name is required',
            'employee.*.name'  => 'employee.*.name is required',
            'employee.*.title'  => 'employee.*.title is required',
        ];
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:100',
            'employee.*.name'=>'required|max:100',
            'employee.*.title'=>'required|max:100'
        ];
    }

}
