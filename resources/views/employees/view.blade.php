@extends('welcome')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1>Detalle empleado</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif

        <p>
            <strong>Nombre Empleado:</strong> {{ $employee->name }}<br>
            <strong>Apellido Paterno:</strong> {{ $employee->first_name }}<br>
            <strong>Apellido Materno:</strong> {{ $employee->last_name }}<br>
            <strong>Puesto:</strong> {{ $employee->position->name }}<br>
            <strong>Compania:</strong> {{ $employee->company->name }}<br>
            <strong>Comienzo:</strong> {{ $employee->start_date }}<br>
        </p>

    </div>
</div>
@endsection