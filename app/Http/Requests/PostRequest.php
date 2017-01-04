<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'en.title' => 'required|max:255',
            'ar.title' => 'required|max:255',
            'en.description' => 'required',
            'ar.description' => 'required',
             'image_url' => 'required|file|image',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
