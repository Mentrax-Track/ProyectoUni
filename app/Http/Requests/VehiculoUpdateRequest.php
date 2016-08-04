<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class VehiculoUpdateRequest extends Request
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
            'pasageros'  => 'required|numeric',
            'kilometraje'=> 'required|numeric',
            'tipo'  => 'required|in:Camión,Camioneta,Civilian,Jeep,Omnibus,Taxi,Vagoneta',
            'estado'=> 'required|in:Optimo,Mantenimiento,Desuso',
            'color' => 'required|regex:/^[a-z ñáéíóú]+$/i|max:20',
            'path'  => 'mimes:jpg,jpeg,bmp,png',
        ];
    }
    public function messages()
    {
        return [
                'color.regex' => 'En el color solo se aceptan letras',
        ];
    }
}
