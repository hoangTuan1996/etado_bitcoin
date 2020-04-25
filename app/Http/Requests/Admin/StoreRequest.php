<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'birthday' => ['nullable', 'date_format:d/m/Y'],
            'phone' => ['required', 'string', 'min:10', 'max:11', 'unique:admins'],
            'address' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
