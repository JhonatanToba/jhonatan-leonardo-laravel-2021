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
                            <a href={{ url("empleado/".$empleado->id)}} type="button" class="btn btn-secondary">Ver</a>

                            <!-- Button trigger modal -->
                            <form method="POST" action="{{ (route ("empleado.destroy", ["empleado" => $empleado["id"]]))}}">
                                @csrf
                                {{@method_field("delete")}}
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                            <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar">Eliminar</button>
 -->
                            <!-- <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="eliminar">Eliminar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Está seguro de eliminar la información?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form method="POST" action="{{ (route ("empleado.destroy", ["empleado" => $empleado["id"]]))}}">
                                                @csrf
                                                {{@method_field("delete")}}
                                                <button type="submit" class="btn btn-danger">
                                                    Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <a type="button" class="btn btn-success" href={{ (url ("empleado/".$empleado->id."/edit"))}}>Editar
                            </a>
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