@extends('admin.Template')

@section('title')
    Registrar Camion
@endsection

@section('content')
    <div class="row ">
        <div class="col-3">
        </div>
        <div class="col-6">

            <br><br>
            <form action="{{route('truck.store')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label class="form-label" for="numberRegistration">Placa:</label>
                <input class="form-control" type="text" name="numberRegistration" id="numberRegistration" placeholder="Placa...">
            </div>
            <div class="mb-3 row">
                <label class="form-label" for="capacity">Capacidad de Recoleccion(kg):</label>
                <input class="form-control" type="text" name="capacity" id="capacity"
                    placeholder="Capacidad de recoleccion(Kg)">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Registrar</button>
                <a href="{{ route('truck.index') }}" class="btn btn-secondary mb-3">Cancelar</a>
            </div>
        </form>
        
    </div>
    <div class="col-3">
    </div>
</div>
@endsection
