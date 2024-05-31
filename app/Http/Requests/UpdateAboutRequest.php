<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => ['required', 'string'],
            'title' => ['required', 'string'],
            'subTitle' => ['required', 'string'],
            'image' => ['required', 'string'],
            'birthday' => ['required', 'string'],
            'website' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'degree' => ['required', 'string'],
            'email' => ['required', 'string'],
            'city' => ['required', 'string'],
            'myPersonalInfo' => ['required', 'string'],
        ];
    }
}
