<div><br>
    <h1>¿Seguro que quieres eliminar este empleado?</h1><br><br>
      <div class="mx-auto card" style="width: 18rem;">
          <img class="card-img-top" src="https://blog.gympass.com/wp-content/uploads/2018/03/shutterstock_428032408-950-x-352-px.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre: {{$empleado->nombre}} {{$empleado->segundo_nombre}} {{$empleado->apellidopat}} {{$empleado->apellidomat}}</h5>
            <p class="card-text">Sexo: {{$empleado->sexo}} </p>
            <p class="card-text">Fecha de Nacimiento: {{$empleado->fecha_de_nacimiento}} </p>
            <p class="card-text">Puesto: {{$empleado->puesto_de_trabajo}} </p>
            <p class="card-text">Teléfono {{$empleado->telefono}} </p>
            <a href="{{route('empleados.index')}}" class="btn btn-success btn-sm">Regresar</a>
          </div>
        </div><br><br><br>
  </div>
