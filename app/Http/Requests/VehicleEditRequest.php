<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleEditRequest extends FormRequest
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
            'year'    => 'required|int|date_format:Y',
            'model'   => 'required|max:255|string',
            'make'    => 'required|max:255|string',
            'trim'    => 'required|max:255|string',
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
            'year.required'    => 'Year is required',
            'model.required'   => 'Model is required',
            'make.required'    => 'Make is required',
            'trim.required'    => 'Trim is required',
        ];
    }
}
