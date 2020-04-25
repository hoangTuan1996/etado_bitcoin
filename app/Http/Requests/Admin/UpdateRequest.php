<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email,'.$this->user],
            'birthday' => ['nullable', 'date_format:d/m/Y'],
            'phone' => ['nullable', 'string', 'min:10', 'max:11', 'unique:admins,phone,'.$this->user],
            'password' => ['nullable', 'string', 'min:8'],
        ];
    }
}
