<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\Usuario;
use App\Http\Livewire\Usuarios\ReglasUsuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UsuariosCreate extends Component
{

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;
    public function mount()
    {
        $this->usuario = new Usuario();
    }
    public function render()

    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if ($this->foto) {
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }

    public function rules()
    {
        return ReglasUsuarios::reglas();
    }
}
