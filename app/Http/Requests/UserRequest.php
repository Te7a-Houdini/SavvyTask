<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
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
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        $userObj = $this->route('user');

        $ignoreUniqueEmailOnUpdate = isset($userObj) ? $this->route('user')->id : null;

        $passwordRequired = 'required';

        // we are trying to update user pw
        if (isset($userObj) && (empty($request->get('password')))) {
            $passwordRequired = 'sometimes';
        }

        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$ignoreUniqueEmailOnUpdate,
            'password' => $passwordRequired.'|min:6|confirmed',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required',
            'last_name.required'  => 'Last Name is required',
        ];
    }
}
