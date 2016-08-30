<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class ViajeCreateRequest extends Request
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
            'destino_id'=> 'required',
            'kilome'    => 'required|numeric',
            'k1'        => 'numeric',
            'k2'        => 'numeric',
            'k3'        => 'numeric',
            'k4'        => 'numeric',
            'k5'        => 'numeric',
            'adicional' => 'numeric',
            'total'     => 'numeric',
            'chofer'    => 'required',
            'encargado' => 'required',
            'vehiculo'  => 'required',
            'entidad'   => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50|in:Artes Musicales,Artes Plásticas
                            ,Ingeniería Agroindustrial,Ingeniería Agronómica,Ingeniería Agropecuaria-Villazón
                            ,Ingeniería en Desarrollo Rural,Med. Veterinaria y Zootécnia-Tupiza,Enfermería
                            ,Enfermería-Villazón,Administración de Empresas,Contabilidad y Finanzas
                            ,Contaduria Publica,Contaduria Publica-Tupiza,Economía,Economía-Uncia,Economía-Uyuni
                            ,Estadística,Física,Ingeniería Informática,Matemática,Química,Linguística e Idiomas
                            ,Linguística e Idiomas-Uyuni,Trabajo Social,Trabajo Social-Uncia,Turismo
                            ,Turismo-Uyuni,Construcciones Civiles,Geodecia y Topografía,Ingeniería Civil
                            ,Ingeniería de Sistemas,Ingenieria del Medio Ambiente,Ingeniería Geológica
                            ,Ing de Procesos de Mat Primas Min,Ingeniería Minera,Ingeniería Electrica
                            ,Ingeniería Electrónica,Ingeniería Mecánica,Ingeniería Mecatrónica,Ingeniería Automotriz
                            ,Federación Universitaria Docente,Federación Universitaria Local
                            ,Sindicato Trabajadores Universitarios,Institucionales',

            'objetivo'     => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'tipo'         => 'required|in:Viaje de Práctica,Viaje de Inspección,Viaje Académico,Viaje de Cultura',
            'pasajeros'    => 'required|numeric',
            'fecha_inicial'=> 'required',
            'fecha_final'  => 'required',
        ];
    }
    public function messages()
    {
        return [
                'entidad.regex'   => 'En la entidad solo se aceptan letras',
                'objetivo.regex'  => 'En el Objetivo solo se aceptan letras',
        ];
    }
}
