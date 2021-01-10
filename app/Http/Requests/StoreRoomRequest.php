<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoomRequest extends FormRequest
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
            "type" => "required",
            "description" => "required",
            "hotel_id" => "required|exists:App\Models\Hotel,id",
            "adult_occupancy" => "required|numeric",
            "child_occupancy" => "required|numeric",
            "base_price" => "required|numeric"
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
            'type.required' => 'Room type is required',
            'description.required' => 'Description is required',
            'hotel_id.required' => 'Select a Hotel',
            'hotel_id.exists' => 'The hotel you selected is invalid',
            'adult_occupancy.required' => 'You must indicate the number of adults',
            'adult_occupancy.numeric' => 'You must indicate a valid number',
            'child_occupancy.required' => 'You must indicate the number of childs',
            'child_occupancy.numeric' => 'You must indicate a valid number',
            'base_price.required' => 'You must indicate the room base price',
            'base_price.numeric' => 'You must indicate a valid number',
        ];
    }

}
