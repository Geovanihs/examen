<?php

namespace App\Http\Livewire;

use App\Http\Livewire\ReglasEmpleados;
use App\Models\empleado;
use Livewire\Component;

class Empleadoscreate extends Component
{
    public empleado $empleado;

    public function mount(){
        $this->empleado = new Empleado();
    }
    public function render()
    {
        return view('livewire.empleadoscreate');
    }

    public function crear(){

        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }

    protected function rules(){
        return ReglasEmpleados::reglas();
    }


}
