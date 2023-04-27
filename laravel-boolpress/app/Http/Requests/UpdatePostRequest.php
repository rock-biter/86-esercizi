<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                'max:150',
                Rule::unique('posts', 'title')->ignore($this->post)
            ],
            'content' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id'
        ];
    }
}
