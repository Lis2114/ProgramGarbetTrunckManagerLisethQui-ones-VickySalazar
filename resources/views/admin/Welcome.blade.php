@extends('admin.Template')

@section('content')
    <div class="container-fluid">
        <div class="container  form">

            <div class="row">
                <div class="col-3 col-sm-5">
                    <img src="https://cdn-icons-png.flaticon.com/256/3321/3321681.png" width="100">
                    <a href={{ route('employee.index') }} class="btn btn-info">Empleado</a>
                </div>
            </div>

            <div class="row">
                <div class="col-3 col-sm-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/6643/6643416.png" width="100">
                    <a href="{{ route('truck.index') }}" class="btn btn-info">Camiones</a>
                </div>
            </div>

            <div class="row">
                <div class="col-3 col-sm-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/340/340266.png" width="95">
                    <a href="{{ route('route.index') }}" class="btn btn-info"> Rutas</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3 col-sm-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/10252/10252718.png" width="95">
                    <a href="{{ route('schedule.index') }}" class="btn btn-info">Horarios</a>

                </div>
            </div>
        </div>
    </div>
@endsection
