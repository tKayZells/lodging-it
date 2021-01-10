<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            "name" => "required",
            "description" => "required",
            "country" => "required",
            "city" => "required",
            "address" => "required",
            "phone" => "required"
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
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'country.required' => 'Select a Country',
            'city.required' => 'You must indicate a city',
            'address.required' => 'Address is required',
            'phone.required' => 'Phone number is required'
        ];
    }

}
