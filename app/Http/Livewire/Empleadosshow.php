<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;

class Empleadosshow extends Component
{
    public empleado $empleado;
    public function render()
    {
        return view('livewire.empleadosshow');
    }
}
