@extends("layouts.default")
@section("content")
    <form class="container" method="POST" action ="{{ (route ("empleado.update",["empleado"=>$empleado]))}}">
    @csrf
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="number" value="{{$empleado->codigo}}" class="form-control" name="codigo" placeholder={{$empleado->codigo}}>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" value={{$empleado->nombre}} class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="lugar_nacimiento">Lugar de Nacimiento</label>
            <input type="text" value={{$empleado->lugar_nacimiento}} class="form-control" name="lugar_nacimiento">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" value={{$empleado->fecha_nacimiento}} class="form-control" name="fecha_nacimiento">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" value={{$empleado->telefono}} class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" value={{$empleado->cargo}} class="form-control" name="cargo">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" value={{$empleado->cargo}} class="form-control" name="estado">
        </div>
        
        {{@method_field("PATCH")}}
        <button type="submit" class="btn btn-primary" >Actualizar</button>
    </form>
@stop