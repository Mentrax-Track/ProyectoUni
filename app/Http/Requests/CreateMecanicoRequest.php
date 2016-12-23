<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class CreateMecanicoRequest extends Request
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
            'kilometraje'=>'regex:/^[0-9]+$/i|between:3,8',
            'fecha'     => 'required|date',
            'cantidad'  => 'required|numeric',
            'unidad'    => 'required',
            'trabajo'   => 'required|regex:/^[a-z ñáéíóú- 0-9]+$/i|min:5|max:100',
            'marca'     => 'regex:/^[a-z ñáéíóú- 0-9]+$/i|min:5|max:50',
            'codigo'    => 'regex:/^[a-z ñáéíóú- 0-9]+$/i|min:5|max:50',
            'observacion'=> 'regex:/^[a-z ñáéíóú- 0-9]+$/i|min:5|max:200',
        ];
    }
    public function messages()
    {
        return [
                'kilometraje.regex'  => 'El kilometraje no debe exeder de los 8 digitos',
                'trabajo.regex'      => 'En trabajo solo debe contener números y letras hatas 100 caracteres',
                'marca.regex'        => 'En la marca solo debe contener números y letras hatas 50 caracteres',
                'codigo.regex'       => 'En el código solo debe contener números y letras hatas 50 caracteres',
                'observacion.regex'  => 'En la observación solo debe contener números y letras hatas 200 caracteres',
                
        ];
    }
}
