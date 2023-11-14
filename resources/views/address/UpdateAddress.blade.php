@extends('address.BaseRoute')

@section('title')
    Editar Rutas
@endsection

@section('content')
    <div class="row ">
        <div class="col-3">
        </div>
        <div class="col-6">

            <br><br>
            <form action="{{ route('addres.update', $addres) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="form-label" for="sector">sector:</label>
                    <input class="form-control" type="text" name="sector" id="sector" placeholder="sectores..."
                        value="{{ old('sector', $addres->sector) }}">
                    @error('sector')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label class="form-label" for="neighborhoods">Barrios:</label>
                    <input class="form-control" type="text" name="neighborhoods" id="neighborhoods" placeholder="Barrios.."
                        value="{{ old('neighborhoods', $addres->neighborhoods) }}">
                    @error('neighborhoods')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" aria-hidden="true"></i>Editar</button>
                    &nbsp; &nbsp;
                    <a href="{{ route('adrres.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>

        </div>
        <div class="col-3">
        </div>
    </div>
@endsection

