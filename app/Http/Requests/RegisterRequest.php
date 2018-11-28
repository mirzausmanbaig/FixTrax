<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'          => 'required|max:255',
            'email'         => 'required|max:255|email|unique:User',
            'password'      => 'required|min:8',
            'company_name'  => 'required|string',
            'location_name' => 'required|string',
            'address'       => 'required|max:255|string',
            'city'          => 'required|max:255|string',
            'state'         => 'required|max:255|string',
            'zip'           => 'required|max:255|string',
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
            'email.required'         => 'Email is required',
            'name.required'          => 'Name is required',
            'password.required'      => 'Password is required',
            'company_name.required'  => 'Company Name is required',
            'location_name.required' => 'Location Name is required',
            'address.required'       => 'Address is required',
            'city.required'          => 'City is required',
            'state.required'         => 'State is required',
            'zip.required'           => 'Zip-Code is required',
        ];
    }
}
