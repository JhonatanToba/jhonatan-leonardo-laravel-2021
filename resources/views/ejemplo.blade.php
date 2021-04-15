@extends("app")
@section("lista")
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
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $empleado)
                            <tr>
                                <td>{{$empleado["id"]}}</td>
                                <td>{{$empleado["codigo"] }}</td>
                                <td>{{$empleado["nombre"]}}</td>
                                <td>{{$empleado["lugar_nacimiento"]}}</td>
                                <td>{{$empleado["fecha_nacimiento"]}}</td>
                                <td>{{$empleado["telefono"]}}</td>
                                <td>{{$empleado["cargo"]}}</td>
                                <td>{{$empleado["estado"]}}</td>
                                <td>
                                    <a href = {{ url("empleado/".$empleado->id)}} type="button" class="btn btn-secondary">Ver</a>
                                    <a method="delete" href = "{{url(route ("empleado.destroy", ["empleado" => $empleado["id"]]))}}" type="submit" class="btn btn-danger">
                                    Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
@stop
