<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class DestinoCreateRequest extends Request
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
            'origen'     => 'required|regex:/^[a-z ñáéíóú 0-9 , .]+$/i|min:5|max:50',
            'destino'    => 'required|regex:/^[a-z ñáéíóú 0-9 , .]+$/i|min:5|max:50',
            'ruta'       => 'required|regex:/^[a-z ñáéíóú 0-9 , .]+$/i|max:200',
            'dep_inicio' => 'required|in:Potosí,Oruro,La_Paz,Pando,Cochabamba,Sucre,Tarija,Santa_Cruz,Beni',
            'dep_final'  => 'required|in:Potosí,Oruro,La_Paz,Pando,Cochabamba,Sucre,Tarija,Santa_Cruz,Beni',
            'kilometraje'=> 'required|between:1,6',
            'tiempo'     => 'required',
        ];
    }
    public function messages()
    {
        return [
                'origen.regex'   => 'En el origen solo se aceptan letras',
                'destino.regex'  => 'En el destino solo se aceptan letras',
                'ruta.regex'     => 'En la ruta solo se aceptan letras y números',
        ];
    }
}
