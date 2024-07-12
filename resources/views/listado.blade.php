@extends('layout.layout')

@section('title', 'Listado')

@section('content')
    <table class="table">
        <tbody>
            <tr>
                <th colspan="4">
                    <h4>Listado de alumnos</h4>
                </th>
            </tr>
            <tr>
                @if($alumnos)
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td colspan="4">
                                <a href="{{ route('listado.show', $alumno) }}">
                                    {{ $alumno->aluNombre }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>
                        No hay alumnos registrados.
                    </p>
                @endif
            </tr>
        </tbody>
    </table>
@endsection