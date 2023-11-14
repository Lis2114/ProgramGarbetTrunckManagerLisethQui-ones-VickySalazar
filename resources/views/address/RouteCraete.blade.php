@extends('address.indexRoute')

@section('title')
    Registrar rutas
@endsection

@section('content')
    <div class="row ">
        <div class="col-3">
        </div>
        <div class="col-6">

            <br><br>
            <form action="{{route('route.store')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label class="form-label" for="sector">sector:</label>
                <input class="form-control" type="text" name="sector" id="sector" placeholder="Sector">
            </div>
            <div class="mb-3 row">
                <label class="form-label" for="neighborhoods">Barrios:</label>
                <input class="form-control" type="text" name="neighborhoods" id="neighborhoods"
                    placeholder="Barrios">
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
