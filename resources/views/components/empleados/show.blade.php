@extends("layouts.default")
@section("content")
    <div class="container" id="listado">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Lugar de Nacimiento</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Teléfono</td>
                            <td>Cargo</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$empleado->id}}</td>
                                <td>{{$empleado->codigo }}</td>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->lugar_nacimiento}}</td>
                                <td>{{$empleado->fecha_nacimiento}}</td>
                                <td>{{$empleado->telefono}}</td>
                                <td>{{$empleado->cargo}}</td>
                                <td>{{$empleado->estado}}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop