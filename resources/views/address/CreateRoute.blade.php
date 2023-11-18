@extends('admin.Template')

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
                @error('sector')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3 row">
                <label class="form-label" for="neighborhoods">Barrios:</label>
                <input class="form-control" type="text" name="neighborhoods" id="neighborhoods"
                    placeholder="Barrios">
                    @error('neighborhoods')
                <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Registrar</button>
                &nbsp; &nbsp;
                <a href="{{ route('route.index') }}" class="btn btn-secondary mb-3">Cancelar</a>
            </div>
        </form>

    </div>
    <div class="col-3">
    </div>
</div>
@endsection
