<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Acerca de:</h4>
          <p class="text-muted">Lista de empleados de la empresa</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Redes Sociales</h4>
          <ul class="list-unstyled">
            <li><a href="https://twitter.com" class="text-white">Twitter</a></li>
            <li><a href="https://www.facebook.com" class="text-white">Facebook</a></li>
            <li><a href="https://outlook.live.com" class="text-white">Correo</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="{{ url("empleado/")}}" class="navbar-brand d-flex align-items-center">
        <strong>Listado de empleados</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
        	<a type="button" href="{{(route ("empleado.create"))}}" class="btn btn-primary">Agregar Empleado</a>
       	</li>
			</ul>
</div>
