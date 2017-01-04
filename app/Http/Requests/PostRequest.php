<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        $postObj = $this->route('post');

        $imageRequired = 'required';

        // we are trying to update user pw
        if (isset($postObj) && (empty($request->get('image_url')))) {
            $imageRequired = 'sometimes';
        }

        return [
            'en.title' => 'required|max:255',
            'ar.title' => 'required|max:255',
            'en.description' => 'required',
            'ar.description' => 'required',
             'image_url' => $imageRequired.'|file|image',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
