<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;
    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }

    public function editar()
    {
        $this->validate();
        if ($this->foto) {
            if ($this->usuario->foto) {
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        if ($this->password) {
            $this->usuario->password = Hash::make($this->password);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }

    public function rules()
    {
        return ReglasUsuarios::reglas($this->usuario->id);
    }
}
