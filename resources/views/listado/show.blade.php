@extends('layout.layout')

@section('title', 'Alumno | '.$alumno->id)

@section('content')
    <table class="table">
        <tr>
            <td colspan="4">
                Nombre: <strong>{{ $alumno->aluNombre }}</strong>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Curso: {{ $alumno->aluCurso }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Nota 1: {{ $alumno->aluNota1 }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Nota 2: {{ $alumno->aluNota2 }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Promedio: {{ $alumno->aluPromedio }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Condición: {{ $alumno->aluCondicion }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Fecha de registro: {{ $alumno->created_at->diffForHumans() }}
            </td>
        </tr>
    </table>
    <a href="/listado">
        <- Regresar
    </a>
@endsection