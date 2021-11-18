<?php

namespace App\Http\Livewire;

use App\Http\Livewire\ReglasEmpleados;
use App\Models\empleado;
use Livewire\Component;

class Empleadosupdate extends Component
{
    public empleado $empleado;

    public function render()
    {
        return view('livewire.empleadosupdate');
    }

    public function editar(){
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }

    protected function rules(){
        return ReglasEmpleados::reglas();
    }
}
