<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                editar usuario
            </div>
            <div class="card-body">
                @include('livewire.usuarios.formulario')

            </div>
            <div class="card-footer">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm"><i
                        class="fa fa-edit"></i> Modificar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>

    </form>

</div>
