<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UsuariosDelete extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }

    public function delete()
    {
        if ($this->usuario->foto_u = !null) {
            Storage::disk('public')->delete($this->usuario->foto_u);
        }

        $this->usuario->delete();
        return redirect(route('usuarios.index'));
    }

}

