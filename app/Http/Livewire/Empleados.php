<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;
use Livewire\WithPagination;

class Empleados extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $empleados = ($this->cargado == true) ? empleado::where('id', 'LIKE', '%' . $this->search . '%')
            ->orwhere('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('segundo_nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('apellidopat', 'LIKE', '%' . $this->search . '%')
            ->orwhere('apellidomat', 'LIKE', '%' . $this->search . '%')
            ->orwhere('sexo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('fecha_de_nacimiento', 'LIKE', '%' . $this->search . '%')
            ->orwhere('puesto_de_trabajo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('telefono', 'LIKE', '%' . $this->search . '%')
            ->paginate(20) : [];


        return view('livewire.empleados', compact('empleados'));
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
