<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidation extends FormRequest
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
        return [
            'name'=>'required',
            'prenom'=>'required',
            'cin'=>'required|max:8|min:8',
            'adresse'=>'required',
            'Tel'=>'required|max:8|min:8',
            'code'=>'required|min:7|max:7',
            'description'=>'required|min:5|max:20',
        ];
    }
}
