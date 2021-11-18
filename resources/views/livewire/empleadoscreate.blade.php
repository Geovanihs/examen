<div><br><br>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                <H1> CREAR EMPLEADO</H1>
            </div>
            <div class="card-body">
                @include('livewire.formulario')
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="{{route('empleados.index')}}">Regresar</a>
            </div>
          </div>
    </form>
</div>
