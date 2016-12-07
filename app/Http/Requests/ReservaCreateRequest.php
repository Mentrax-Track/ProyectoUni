<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class ReservaCreateRequest extends Request
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

    /**esta hidrolabaroa nos puede 
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'entidad'   => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50',



            'objetivo'    => 'required|regex:/^[a-z ñáéíóú]+$/i|max:100',
            'pasajeros'    => 'required|numeric',
            'fecha_inicial'=> 'required',
            'fecha_final'  => 'required',
        ];
    }
    public function messages()
    {
        return [
                'entidad.regex' => 'En la entidad solo se aceptan letras',
                'objetivo.regex'  => 'En el Objetivo solo se aceptan letras',
        ];
    }
}
