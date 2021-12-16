<div wire:init="cargando">
    <div class="float-right mb-2">
        <a href="{{ route('empleados.create') }}" type="button" class="btn btn-success ">Crear Nuevo</a>
    </div>
    <div class="mb-2 col-3">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>
    </div>
    @if (count($empleados) > 0)

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
                    <th scope="col">Teléfono</th>
                    <th scope="col">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <th scope="row">{{ $empleado->id }}</th>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->segundo_nombre }}</td>
                        <td>{{ $empleado->apellidopat }}</td>
                        <td>{{ $empleado->apellidomat }}</td>
                        <td>{{ $empleado->sexo }}</td>
                        <td>{{ $empleado->fecha_de_nacimiento }}</td>
                        <td>{{ $empleado->puesto_de_trabajo }}</td>
                        <td>{{ $empleado->telefono }}</td>

                        <td>
                            <a href="{{ route('empleados.update', $empleado) }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-edit"></i> </a>
                            <a href="{{ route('empleados.delete', $empleado) }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-trash"></i></a>
                            <a href="{{ route('empleados.show', $empleado) }}" class="btn btn-info btn-sm"><i
                                    class="fa fa-eye"></i></a>

                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    @else

        <div class="d-flex justify-content-center">
            <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

    @endif



    {{ $cargado == true ? $empleados->links() : null }}
</div>
