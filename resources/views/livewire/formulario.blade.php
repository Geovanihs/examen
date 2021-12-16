<div class="row">
    <div class="mx-auto col-6">
        <div class="mb-3">
            <label>Nombre</label>
            <input wire:model='empleado.nombre' type="text" class="form-control">
            @error('empleado.nombre')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>


        <div class="mb-3">
            <label>Segundo Nombre</label>
            <input wire:model='empleado.segundo_nombre' type="text" class="form-control" >
            @error('empleado.segundo_nombre')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Apellido Paterno</label>
            <input wire:model='empleado.apellidopat' type="text" class="form-control" >
            @error('empleado.apellidopat')<span class="text-danger">Valor Requerido</span>
            @enderror
            </div>

        <div class="mb-3">
            <label>Apellido Materno</label>
            <input  wire:model='empleado.apellidomat' type="text" class="form-control" >
            @error('empleado.apellidomat')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Sexo</label>
            <input  wire:model='empleado.sexo' type="text" class="form-control" >
            @error('empleado.sexo')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Fecha de Nacimiento</label>
            <input  wire:model='empleado.fecha_de_nacimiento' type="text" class="form-control" >
            @error('empleado.fecha_de_nacimiento')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Puesto de Trabajo</label>
            <input  wire:model='empleado.puesto_de_trabajo' type="text" class="form-control" >
            @error('empleado.apellidomat')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Teléfono</label>
            <input  wire:model='empleado.telefono' type="text" class="form-control" >
            @error('empleado.telefono')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

    </div>
</div>
