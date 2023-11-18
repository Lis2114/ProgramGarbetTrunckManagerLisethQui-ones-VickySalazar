@extends('admin.Template')

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
                    <input class="form-control" type="text" name="name" id="name" placeholder="Nombres..."
                        value="{{ old('name', $employee) }}">
                    @error('name')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label class="form-label" for="lastName">Apellidos:</label>
                    <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Apellidos..."
                        value="{{ old('lastName', $employee) }}">
                    @error('lastName')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label class="form-label" for="identification">Cedula:</label>
                    <input class="form-control" type="text" name="identification" id="identification"
                        placeholder="Ingrese numeros" value="{{ old('identification', $employee) }}">
                    @error('identification')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="type">Tipo: </label>
                    <br>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="conductor" value="Conductor"
                            @checked(@old('type', $employee) == 'Conductor')>
                        <label class="form-check-label" for="conductor">Conductor</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="recolector" value="Recolector"
                            @checked(@old('type', $employee) == 'Recolector')>
                        <label class="form-check-label" for="recolector">Recolector</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="barrendero" value="Barrendero"
                            @checked(@old('type', $employee) == 'Barrendero')>
                        <label class="form-check-label" for="barrendero">Barrendero</label>
                    </div>
                    @error('type')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Registrar</button>
                    &nbsp; &nbsp;
                    <a href="{{ route('employee.index') }}" class="btn btn-secondary mb-3">Cancelar</a>
                </div>
            </form>
            <

        </div>
        <div class="col-3">
        </div>
    </div>
@endsection
