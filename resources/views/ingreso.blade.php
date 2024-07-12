@extends('layout.layout')

@section('title','Ingresar alumno')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                <h4>
                    Ingresar alumno
                </h4>
            </th>
        </tr>
        <form action="{{ route('ingreso.store') }}" method="POST">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
@endsection