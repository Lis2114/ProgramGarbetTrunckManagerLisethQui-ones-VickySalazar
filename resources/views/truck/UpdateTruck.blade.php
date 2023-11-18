@extends('admin.Template')

@section('title')
    Editar Camion
@endsection

@section('content')
    <div class="row ">
        <div class="col-3">
        </div>
        <div class="col-6">

            <br><br>
            <form action="{{route('truck.update', $truck )}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label class="form-label" for="numberRegistration">Placa:</label>
                <input class="form-control" type="text" name="numberRegistration" id="numberRegistration" placeholder="Placa..."
                    value="{{ old('numberRegistration', $truck->numberRegistration) }}">
                    @error('numberRegistration')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3 row">
                <label class="form-label" for="capacity">Capacidad de Recoleccion(kg):</label>
                <input class="form-control" type="text" name="capacity" id="capacity"
                    placeholder="Capacidad de recoleccion(Kg)"
                    value="{{ old('capacity', $truck->capacity) }}">
                    @error('capacity')
                    <div class="text-small text-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Registrar</button>
                &nbsp; &nbsp;
                <a href="{{ route('truck.index') }}" class="btn btn-secondary mb-3">Cancelar</a>
            </div>
        </form>

    </div>
    <div class="col-3">
    </div>
</div>
@endsection

