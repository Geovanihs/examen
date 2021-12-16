<div wire:init="cargando">

    <div class="float-right mb-2">
        <a href="{{ route('usuarios.create') }}" type="button" class="btn-sm btn btn-success"><i
                class="fa fa-plus-circle"></i> Crear nuevo</a>

    </div>

    <div class="mb-2 col-3">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" type="search" class="form-control" placeholder="Buscar..." aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>
    </div>


    @if (count($usuarios) > 0)
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">usuario</th>
                    <th scope="col">email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <th>
                            <img style="border-radius: 25px; width: 50px;height:50px"
                                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
                                alt="">
                        </th>
                        <td>{{ $usuario->nombre_usuario }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $usuario) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('usuarios.edit', $usuario) }}" title="Editar usuario"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('usuarios.delete', $usuario) }}"
                            title="Eliminar usuario seleccionado" class="btn-sm btn btn-danger"><i
                                    class="fa fa-trash"></i></a>
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



    {{ $cargado == true ? $usuarios->links() : null }}
</div>
