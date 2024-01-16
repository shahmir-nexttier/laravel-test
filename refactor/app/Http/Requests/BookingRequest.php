<?php

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {

        return[
            'first_name' => 'required|min:1|max:191',
            'last_name' => 'required|min:1|max:191',
            // ... Add more validation rules
        ];
    }
}