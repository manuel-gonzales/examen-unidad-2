@csrf
<tr>
    <th>
        Nombre
    </th>
    <td>
        <input type="text" name="aluNombre" value="{{ old('aluNombre', $alumno->aluNombre) }}"><br>
        {{ $errors->first('aluNombre') }}
    </td>
</tr>
<tr>
    <th>
        Curso
    </th>
    <td>
        <input type="text" name="aluCurso" value="{{ old('aluCurso', $alumno->aluCurso) }}"><br>
        {{ $errors->first('aluCurso') }}
    </td>
</tr>
<tr>
    <th>
        Nota 1
    </th>
    <td>
        <input type="number" name="aluNota1" step="0.1" min="0" max="20" value="{{ old('aluNota1', $alumno->aluNota1) }}"><br>
        {{ $errors->first('aluNota1') }}
    </td>
</tr>
<tr>
    <th>
        Nota 2
    </th>
    <td>
        <input type="number" name="aluNota2" step="0.1" min="0" max="20" value="{{ old('aluNota2', $alumno->aluNota2) }}"><br>
        {{ $errors->first('aluNota2') }}
    </td>
</tr>
<tr>
    <td colspan="2" text-align="center">
        <button>
            {{ $btnText }}
        </button>
    </td>
</tr>