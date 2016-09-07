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
            'encargado' => 'required',
            'entidad'   => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50|in:Artes Musicales,
                                Artes Plásticas,
                                Ingeniería Agroindustrial,
                                Ingeniería Agronómica,
                                Ingeniería Agropecuaria-Villazón,
                                Ingeniería en Desarrollo Rural,
                                Med Veterinaria y Zootécnia-Tupiza,
                                Enfermería,
                                Enfermería-Villazón,
                                Administración de Empresas,
                                Contabilidad y Finanzas,
                                Contaduría Pública,
                                Contaduría Pública-Tupiza,
                                Economía,
                                Economía-Uncia,
                                Economía-Uyuni,
                                Estadística,
                                Física,
                                Ingeniería Informática,
                                Matemática,
                                Química,
                                Linguística e Idiomas,
                                Linguística e Idiomas-Uyuni,
                                Trabajo Social,
                                Trabajo Social-Uncia,
                                Turismo,
                                Turismo-Uyuni,
                                Construcciones Civiles,
                                Geodecia y Topografía,
                                Ingeniería Civil,
                                Ingeniería de Sistemas,
                                Ingeniería del Medio Ambiente,
                                Ingeniería Geológica,
                                Ing de Procesos de Mat Primas Min,
                                Ingeniería Minera,
                                Medicina,
                                Ingeniería Eléctrica,
                                Ingeniería Electrónica,
                                Ingeniería Mecánica,
                                Ingeniería Mecatrónica,
                                Ingeniería Automotriz,
                                Federación Universitaria Local,
                                Federación Universitaria Docente,
                                Sindicato Trabajadores Universitarios,
                                Institucionales',



            'objetivo'    => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
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
