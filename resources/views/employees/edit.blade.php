@extends('welcome')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editar Empleado</h1>

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
        <form method="post" action="{{ route('employees.update', $employee->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Nombre Empleado</label>
                <input type="text" class="form-control" name="name" value="{{ $employee->name }}" />
            </div>

            <div class="form-group">
                <label for="first_name">Apellido Paterno</label>
                <input type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}" />
            </div>

            <div class="form-group">
                <label for="last_name">Apellido Materno</label>
                <input type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" />
            </div>

            <div class="form-group">
                <label for="start_date">Dia de Comienzo</label>
                <input type="text" class="form-control" name="start_date" value="{{ $employee->start_date }}" />
            </div>

            <div class="form-group">
                <label for="position_id">Posicion</label>
                <input type="text" class="form-control" name="position_id" value="{{ $employee->position_id }}" />
            </div>
            <div class="form-group">
                <label for="company_id">Compania</label>
                <input type="text" class="form-control" name="company_id" value="{{ $employee->company_id }}" />
            </div>

            <button type="submit" class="btn btn-primary">Actualizar empleado</button>
        </form>
    </div>
</div>
@endsection