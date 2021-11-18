<div>
   <div class="float-right mb-2">
       <a href="{{route('empleados.create')}}" type="button" class="btn btn-success ">Crear Nuevo</a>
   </div>

<table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Nombre</th>
       <th scope="col">Segundo Nombre</th>
       <th scope="col">Apellido Paterno</th>
       <th scope="col">Apellido Materno</th>
       <th scope="col">Sexo</th>
       <th scope="col">Fecha de nacimiento</th>
       <th scope="col">Puesto de Trabajo</th>
       <th scope="col">CURP</th>
       <th scope="col">RFC</th>
       <th scope="col">Estado Civil</th>
       <th scope="col">Código Postal</th>
       <th scope="col">Salario</th>
       <th scope="col">Correo</th>
       <th scope="col">Horario</th>
       <th scope="col">Área de Trabajo</th>
       <th scope="col">Facebook</th>
       <th scope="col">Teléfono</th>
       <th scope="col">
           Acciones
       </th>
     </tr>
   </thead>
   <tbody>
       @foreach ($empleados as $empleado)
           <tr>
           <th scope="row">{{$empleado->id}}</th>
           <td>{{$empleado->nombre}}</td>
           <td>{{$empleado->segundo_nombre}}</td>
           <td>{{$empleado->apellidopat}}</td>
           <td>{{$empleado->apellidomat}}</td>
           <td>{{$empleado->sexo}}</td>
           <td>{{$empleado->fecha_de_nacimiento}}</td>
           <td>{{$empleado->puesto_de_trabajo}}</td>
           <td>{{$empleado->curp}}</td>
           <td>{{$empleado->rfc}}</td>
           <td>{{$empleado->estado_civil}}</td>
           <td>{{$empleado->codigo_postal}}</td>
           <td>{{$empleado->salario}}</td>
           <td>{{$empleado->correo}}</td>
           <td>{{$empleado->horario}}</td>
           <td>{{$empleado->area_de_trabajo}}</td>
           <td>{{$empleado->facebook}}</td>
           <td>{{$empleado->telefono}}</td>

           <td>
               <a href="{{ route('empleados.update', $empleado) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
               <a href="{{ route('empleados.delete', $empleado) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

           </td>

         </tr>

       @endforeach
   </tbody>
 </table>
 {{$empleados->links()}}
</div>
