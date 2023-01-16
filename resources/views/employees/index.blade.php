@extends('welcome')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Empleados</h1>
        <div>
            <a href="{{ route('employees.create')}}" class="btn btn-primary mb-3">Agregar empleado</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Empresa</td>
                    <td>Fecha de ingreso</td>
                    <td>Puesto</td>
                </tr>   
            </thead>
            <tbody>
                @foreach($employees as $employee)

                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}} </td>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>  
                    <td>{{$employee->company->name}} </td>   
                    <td>{{$employee->start_date}} </td>
                    <td>{{$employee->position->name}}</td>
                    <td>
                        <a href="{{ route('employees.show',$employee->id)}}" class="btn btn-primary">Ver empleado</a>
                    </td>
                    <td>
                        <a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection