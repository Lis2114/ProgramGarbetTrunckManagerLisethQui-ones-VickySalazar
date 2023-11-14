@extends('employee.BaseEmployee')

@section('title')
    Registrar Empleado
@endsection

@section('content')
    <div class="row ">
        <div class="col-3">
        </div>
        <div class="col-6">

            <br><br>
            <form action="{{ route('employee.store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label class="form-label" for="name">Nombres:</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nombres...">
                </div>
                <div class="mb-3 row">
                    <label class="form-label" for="lastName">Apellidos:</label>
                    <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Apellidos...">
                </div>
                <div class="mb-3 row">
                    <label class="form-label" for="identification">Cedula:</label>
                    <input class="form-control" type="text" name="identification" id="identification"
                        placeholder="Ingrese numeros">
                </div>
                <div>
                    <label class="form-label" for="type">Tipo: </label>
                    <br>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="conductor" value="c" checked>
                        <label class="form-check-label" for="male">Conductor</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="recolector" value="r"
                            checked>
                        <label class="form-check-label" for="female">Recolector</label>
                    </div>
                    @error('type')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Registrar</button>
                </div>
            </form>
            <form action="{{ route('welcome') }}" class="d-flex justify-content-end">
                <button class="btn btn-primary mb-3">Cancelar</button>
            </form>

        </div>
        <div class="col-3">
        </div>
    </div>
@endsection
