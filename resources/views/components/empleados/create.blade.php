@extends("layouts.default")
@section("content")
<form class="container" method="POST" action ="{{ (route ("empleado.store"))}}">
    @csrf
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="number" class="form-control" name="codigo" placeholder="Ingrese el código">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre"> 
        </div>
        <div class="form-group">
            <label for="lugar_nacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" name="lugar_nacimiento" placeholder="Ingrese el lugar de nacimiento">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Ingrese el teléfono">
        </div>
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="Ingrese el cargo">
        </div>
        <div class="form-group">
            <label for="cargo">Id de la empresa</label>
            <input type="text" class="form-control" name="empresa_id" placeholder="Ingrese el id de la empresa">
        </div>
        <small>Recuerde que el estado se agrega de forma automática a Prueba, puede actualizar la información si el estado cambia</small>
        <br></br>
        <button type="submit" class="btn btn-primary" >Agregar</button>
    </form>
@stop