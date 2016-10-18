<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class InsertRolViaje extends Request
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
            'tipo'  => 'required',
            'fecha' => 'required',
            'lugar' => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50',
        ];
    }
    public function messages()
    {
        return [
                'lugar.regex' => 'En el campo lugar solo se aceptan letras',
        ];
    }
}
