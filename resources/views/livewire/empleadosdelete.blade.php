<div><br>
    <h1>¿Seguro que quieres eliminar este empleado?</h1><br><br>
      <div class="mx-auto card" style="width: 18rem;">
          <img class="card-img-top" src="https://blog.gympass.com/wp-content/uploads/2018/03/shutterstock_428032408-950-x-352-px.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nombre: {{$empleado->nombre}} {{$empleado->segundo_nombre}} {{$empleado->apellidopat}} {{$empleado->apellidomat}}</h5>
            <p class="card-text">Sexo: {{$empleado->sexo}} </p>
            <p class="card-text">Fecha de Nacimiento: {{$empleado->fecha_de_nacimiento}} </p>
            <p class="card-text">Puesto: {{$empleado->puesto_de_trabajo}} </p>
            <p class="card-text">CURP: {{$empleado->curp}} </p>
            <p class="card-text">RFC: {{$empleado->rfc}} </p>
            <p class="card-text">Estado Civil: {{$empleado->estado_civil}} </p>
            <p class="card-text">Código Postal: {{$empleado->codigo_postal}} </p>
            <p class="card-text">Salario: {{$empleado->salario}} </p>
            <p class="card-text">Correo: {{$empleado->correo}} </p>
            <p class="card-text">Horario: {{$empleado->horario}} </p>
            <p class="card-text">Área de Trabajo: {{$empleado->area_de_trabajo}} </p>
            <p class="card-text">Facebook: {{$empleado->facebook}} </p>
            <p class="card-text">Teléfono {{$empleado->telefono}} </p>
            <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
            <a href="{{route('empleados.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
          </div>
        </div><br><br><br>
  </div>
