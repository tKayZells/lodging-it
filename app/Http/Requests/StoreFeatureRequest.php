<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeatureRequest extends FormRequest
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
            "name" => "required|min:3",
            "caption" => "required|min:3",
            "icon" => "required|file|mimes:jpg,bmp,png"
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
            'name.min' => 'Name is not long enough',
            'caption.required' => 'Caption is required',
            'caption.min' => 'Caption is not long enough',
            'icon.required' => 'Icon file is required',
            'icon.file' => 'Icon has to be a file',
            'icon.mimes' => 'Invalid icon file type',
        ];
    }

}
