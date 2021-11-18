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
            <label>CURP</label>
            <input  wire:model='empleado.curp' type="text" class="form-control" >
            @error('empleado.curp')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>RFC</label>
            <input  wire:model='empleado.rfc' type="text" class="form-control" >
            @error('empleado.rfc')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Estado Civil</label>
            <input  wire:model='empleado.estado_civil' type="text" class="form-control" >
            @error('empleado.estado_civil')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Codigo Postal</label>
            <input  wire:model='empleado.codigo_postal' type="text" class="form-control" >
            @error('empleado.codigo_postal')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Salario</label>
            <input  wire:model='empleado.salario' type="text" class="form-control" >
            @error('empleado.salario')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Correo</label>
            <input  wire:model='empleado.correo' type="text" class="form-control" >
            @error('empleado.correo')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Horario</label>
            <input  wire:model='empleado.horario' type="text" class="form-control" >
            @error('empleado.horario')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Área de Trabajo</label>
            <input  wire:model='empleado.area_de_trabajo' type="text" class="form-control" >
            @error('empleado.area_de_trabajo')<span class="text-danger">Valor Requerido</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>Facebook</label>
            <input  wire:model='empleado.facebook' type="text" class="form-control" >
            @error('empleado.facebook')<span class="text-danger">Valor Requerido</span>
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
