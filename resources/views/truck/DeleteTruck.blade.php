@extends('truck.BaseTruck')

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
            </div>
        </form>
        <form action="{{ route('welcome') }}" class="d-lg-inline-flex justify-content-end">
            <button class="btn btn-primary mb-3">Cancelar</button>
        </form>

    </div>
    <div class="col-3">
    </div>
</div>
@endsection
