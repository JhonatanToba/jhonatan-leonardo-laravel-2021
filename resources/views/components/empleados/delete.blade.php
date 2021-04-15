@extends("app")
@section("content")
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar empleado</h5>
                    <a href="{{ url("empleado")}}" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></a>
                </div>
                <div class="modal-body">
                    <p>¿Esta seguro que desea eliminar la infromación?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Si</button>
                </div>
            </div>
        </div>
    </div>
@stop