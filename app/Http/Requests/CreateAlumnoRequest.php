<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'aluNombre' => 'required|string',
            'aluCurso' => 'required|string',
            'aluNota1' => 'required|numeric|min:0|max:20',
            'aluNota2' => 'required|numeric|min:0|max:20'
        ];
    }

    public function messages(): array
    {
        return [
            'aluNombre.required' => 'Ingrese el nombre del alumno.',
            'aluCurso.required' => 'Ingrese el curso.',
            'aluNota1.required' => 'Ingrese la primera nota.',
            'aluNota2.required' => 'Ingrese la segunda nota.'
        ];
    }
}
