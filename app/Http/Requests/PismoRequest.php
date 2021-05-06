<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PismoRequest extends FormRequest
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
            'nazivPismo'=>'required|max:191'
        ];
    }

    public function messages() {
        return [
            'nazivPismo.required' => 'Polje naziv pisma je obavezno',
            'nazivPistmo.max' => 'Maksimalni broj karaktera je 191.'
        ];
    }
}
