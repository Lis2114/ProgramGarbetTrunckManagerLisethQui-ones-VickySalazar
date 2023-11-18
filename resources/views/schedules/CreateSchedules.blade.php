@extends('admin.Template')


@section('title')
    Registrar Horario
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
            <br>
            <form action="{{ route('schedule.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="born_date" class="col-sm-2 col-form-label">Fecha de recolección:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" id="date">
                        @error('date')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="hourExit" class="col-sm-2 col-form-label">Hora de inicio:</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="hourExit" id="hourExit">
                        @error('hourExit')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hourArrival" class="col-sm-2 col-form-label">Hora de Finalización:</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" name="hourArrival" id="hourArrival">
                        @error('hourArrival')
                        <div class="text-small text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="route" class="col-sm-2 col-form-label">Ruta:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="route" aria-label="Default select example">
                            <option selected>Escoger una Ruta...</option>
                            @isset($paths)
                                @foreach ($paths as $path)
                                    <option value="{{ $path->id }}"
                                        @isset($path)
                        @selected(old('id', $path) == $path->id)
                    @else
                        @selected(old('id', $path) == $path->id)
                    @endisset>
                                        {{ $path->sector }} {{ $path->neighborhoods }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="truck" class="col-sm-2 col-form-label">Camion:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="truck" aria-label="Default select example">
                            <option selected>Escoger placa de camion...</option>
                            @isset($trucks)
                                @foreach ($trucks as $truck)
                                    <option value="{{ $truck->id }}"
                                        @isset($truck)
                        @selected(old('id', $truck) == $truck->id)
                    @else
                        @selected(old('id', $truck) == $truck->id)
                    @endisset>
                                        {{ $truck->numberRegistration }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="employee" class="col-sm-2 col-form-label">Empleado: </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="employee" aria-label="Default select example">
                            <option selected>Escoger Empleado...</option>
                            @isset($employees)
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}"
                                        @isset($employee)
                        @selected(old('id', $employee) == $employee->id)
                    @else
                        @selected(old('id', $employee) == $employee->id)
                    @endisset>
                                        {{ $employee->name}} {{ $employee->lastName }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mb-3" aria-hidden="true"></i>Guardar</button>
                    &nbsp; &nbsp;
                    <a href="{{ route('schedule.index') }}" class="btn btn-secondary mb-3">Cancelar</a>
                </div>
            </form>


        </div>
        <div class="col-3">
        </div>
    </div>
@endsection
