@extends('employee.BaseEmployee')

@section('title')
    Registrar Horario
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
            <br>
            <form action="{{ route('schedules.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="born_date" class="col-sm-2 col-form-label">Fecha de recolección:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="hourExit" class="col-sm-2 col-form-label">Hora de inicio:</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="hourExit" id="hourExit">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hourArrival" class="col-sm-2 col-form-label">Hora de Finalización:</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="hourArrival" id="hourArrival">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="address" class="col-4">Ruta:</label>
                    <br>
                    <select class="form-select" name="address" aria-label="Default select example">
                        <option selected>Escoger una Ruta...</option>

                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="truck" class="col-4">Camion:</label>
                    <select class="form-select" name="truck" aria-label="Default select example">
                        <option selected>Escoger placa de camion...</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="employee" class="col-4 " >Empleado: </label>
                    <select class="form-select" name="employee" aria-label="Default select example">
                        <option selected>Escoger Empleado...</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center" >
                    <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Guardar</button>
                </div>
            </form>
            <form action="{{ route('welcome') }}" class="d-flex justify-content-end" >
                <button class="btn btn-primary mb-3 ">Cancelar</button>
            </form>

        </div>
        <div class="col-3">
        </div>
    </div>
@endsection
