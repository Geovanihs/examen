<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;

class Empleadosdelete extends Component
{
    public empleado $empleado;
    public function render()
    {
        return view('livewire.empleadosdelete');
    }

    public function delete(){
        $this->empleado->delete();
        return redirect(route('empleados.index'));
    }

}
