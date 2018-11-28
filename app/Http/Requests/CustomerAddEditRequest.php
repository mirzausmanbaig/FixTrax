<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerAddEditRequest extends FormRequest
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
            'name'          => 'required|string',
            'phone_number'  => 'required|digits:10',
            'email'         => 'required|email|unique:users',
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
            'name.required'         => 'Name is required',
            'phone_number.required' => 'Phone Number is required',
            'email.required'        => 'Email is required',
            'address.required'      => 'Address is required',
            'city.required'         => 'City is required',
            'state.required'        => 'State is required',
            'zip.required'          => 'Zip-Code is required',
        ];
    }
}
