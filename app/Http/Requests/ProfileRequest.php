<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'aemail' => 'required|email|unique:admins,aemail,'.$this->id,
            'aname' => 'required',
            'password' => 'nullable|confirmed|min:8|',


        ];

    }public function messages()
    {
        return [
            'aemail.required' => 'Email is Required , please  enter it',
            'aemail.email' => 'Email is not valid , please enter a valid email',
            'aemail.unique' => 'This Email is already taken , try new one',
            'aname.required' => 'Name is Required , please  enter it',
        ];
    }
}
