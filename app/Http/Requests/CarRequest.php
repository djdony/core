<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
    public function rules() {
        $rules = [
            'name' => 'required|unique:cars',
            'car_type_id' => 'required',
            'max_pax' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        if ($this->route('car')){
            $rules['name'] = [
                'required',
                Rule::unique('cars')->ignore($this->route('car'))];
        }
        return $rules;

    }

}
