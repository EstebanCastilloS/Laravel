<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'full_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            //vlidar campo email unico
            'email' => 'required|unique:members',
            'status' => 'required',
            'ministry' => 'required',
            'photo' => 'required',
            'date_admission' => 'required',

        ];
    }
}
