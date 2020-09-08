<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarTypeRequest extends FormRequest
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
     * Validation rules
     *
     * @var array
     */
    public function rules()
    {
        if ($this->route('car_type')){
            return [
                'name' => [
                    'required',
                    Rule::unique('car_types')->ignore($this->route('car_type'))
                ]
            ];
        }
        return [
            'name' => 'required|unique:car_types'
        ];
    }
}
