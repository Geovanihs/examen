<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;
    public function render()
    {
        $usuarios = ($this->cargado == true) ? Usuario::where('nombre_usuario', 'LIKE', '%' . $this->search . '%')
            ->orwhere('email', 'LIKE', '%' . $this->search . '%')
            ->orwhere('id', 'LIKE', '%' . $this->search . '%')
            ->paginate(20) : [];
        return view('livewire.usuarios.usuarios-index', compact('usuarios'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
