<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:250',
            'password' => 'required|max:250',
            'username' => 'required|max:250',
            'nif' => 'required|max:5',
            'address' => 'required|max:250',
            'city' => 'required|max:5',
            'postal_code' => 'required|max:5'
        ];
    }
}
