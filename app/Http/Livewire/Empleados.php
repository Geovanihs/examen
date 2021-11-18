<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;

class Empleados extends Component
{

    public function render(){
        $empleados = empleado::paginate(10);
        return view('livewire.empleados',compact('empleados'));
    }
}
