@extends('welcome')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3>Agregar nuevo empleado</h3>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('employees.store') }}">
                @csrf
                <div class="form-group">
                    <label for="product_name">Nombre Empleado</label>
                    <input type="text" class="form-control" name="name" />
                </div>

                <div class="form-group">
                    <label for="sku">Apellido Paterno</label>
                    <input type="text" class="form-control" name="first_name" />
                </div>

                <div class="form-group">
                    <label for="amount">Apellido Materno</label>
                    <input type="text" class="form-control" name="last_name" />
                </div>

                <div class="form-group">
                    <label for="price">Dia de Comienzo</label>
                    <input type="text" class="form-control" name="start_date" />
                </div>

                <div class="form-group">
                    <label for="price">Posicion </label>
                    <input type="text" class="form-control" name="position_id" />
                </div>

                <div class="form-group">
                    <label for="price">Compania</label>
                    <input type="text" class="form-control" name="company_id" />
                </div>
                <button type="submit" class="btn btn-primary">Agregar empleado</button>
            </form>
        </div>
    </div>
</div>
@endsection