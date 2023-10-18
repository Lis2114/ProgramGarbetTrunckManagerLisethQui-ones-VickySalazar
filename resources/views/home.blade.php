@extends('templateStatic')
@section('content')
    <?php
    /*
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login']) {
        echo'';
        echo'<form action="/trabajoFinal/services/logout.php"  align="right"><button class="regresar" >Cerrar Sección</button></form>';
        echo '' ;
    }
} 
*/
    ?>
    <h1>BIENVENIDO ADMINISTRADOR </h1>
    <img src="https://img.freepik.com/vector-gratis/trabajador-recoleccion-basura-limpiando-cubo-basura-camion-hombre-llevando-basura-ilustracion-vector-plano-bolsa-plastico-servicio-ciudad-concepto-eliminacion-residuos_74855-10181.jpg"
        class="rounded mx-auto d-block  img" width="40%" align="right">

    <div class= "container  form">

        <div class="row">
            <div class="col-3 col-sm-3">
                <img src="https://cdn-icons-png.flaticon.com/256/3321/3321681.png" width="8%">
                <a href="../pages/empleado/index.php" class="list-group-item list-group-item-action active stretched-link">
                    Agregar Empleado
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-3 col-sm-3">
                <img src="https://cdn-icons-png.flaticon.com/512/6643/6643416.png" width="8%">
                <a href="../pages/camiones/index.php" class="list-group-item list-group-item-action active">
                    Agregar Camiones
                </a>
            </div>
            <div class="row">
                <div class="col-3 col-sm-3">

                    <img src="https://cdn-icons-png.flaticon.com/512/340/340266.png" width="8%">
                    <a href="../pages/rutas/index.php" class="list-group-item list-group-item-action active">
                        Agregar Rutas
                    </a>
                </div>
                <div class="row">
                    <div class="col-3 col-sm-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/10252/10252718.png" width="8%">
                        <a href="../pages/horario/index.php" class="list-group-item list-group-item-action active">
                            Agregar Horario
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-3 col-sm-3">
                            <img src="https://cdn-icons-png.flaticon.com/512/376/376853.png" width="8%">
                            <a href="../pages/horarioEmpleado/index.php"
                                class="list-group-item list-group-item-action active">
                                Agregar Turno de Empleados
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
