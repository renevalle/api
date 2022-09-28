<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\required;

class GuardarPacienteRequest extends FormRequest
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
            //reglas de validacion
            "nombres"=>"required",
            "apellidos"=>"required",
            "edad"=>"required",
            "sexo"=>"required",
            "dni"=>"required|unique:pacientes,dni",
            "tipo_sangre"=>"required",
            "telefono"=>"required",
            "correo"=>"required",
            "direccion"=>"required"
        ];
    }
}
