<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::orderBy('id', 'ASC')->get();

        return view('listado', compact('alumnos'));
    }

    public function store(CreateAlumnoRequest $request)
    {
        $data = $request->validated();

        $data['aluPromedio'] = ($data['aluNota1'] + $data['aluNota2']) / 2;

        $data['aluCondicion'] = $this->determinarCondicion($data['aluPromedio']);

        Alumno::create($data);

        return redirect()->route('listado');
    }

    private function determinarCondicion($promedio)
    {
        if ($promedio >= 13.5) {
            return 'Aprobado';
        } else {
            return 'Reprobado';
        }
    }

    public function create()
    {
        return view('ingreso',[
            'alumno' => new Alumno
        ]);
    }

    public function show($id)
    {
        return view('listado.show', ['alumno' => Alumno::find($id)]);
    }
}
