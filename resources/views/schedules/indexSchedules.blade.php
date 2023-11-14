@extends('schedules.BaseSchedules')

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('schedules/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('schedules/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('schedules/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title')
    Listado Empleados
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('schedules.create') }}" class="btn btn-warning">
                            <i class="fas fa-plus-circle nav-icon"></i>
                        </a>

                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Fecha de recolección</th>
                                <th>Hora de inicio</th>
                                <th>Hora de finalización</th>
                                <th>Ruta</th>
                                <th>Camiom</th>
                                <th>Empleados</th>

                            </tr>
                        </thead>
                        <tbody>
                            @isset($schedules)
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->hourExit }}</td>
                                        <td>{{ $schedule->hourArrival }}</td>
                                        <td>{{ $schedule->date }}</td>
                                        <td>{{ $schedule->date }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-info">
                                                <i class="fas fa-edit nav-icon"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <a href="" class="btn btn-danger">
                                                    <i class="fas fa-minus-circle nav-icon"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- DataTablschedules Plugins -->
    <script src="{{ asset('schedules/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('schedules/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script type="text/javascript">
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "language": {
                    "lengthMenu": "Mostrar " +
                        `<select class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>` +
                        " registros por página",
                    "zeroRecords": "No hay registros",
                    "info": "Mostrando la página PAGE de PAGES",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de MAX registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "buttons": {
                        "copy": "Copiar",
                        "print": "Imprimir",
                        "colvis": "Ocultar columnas"
                    }
                },
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection()