<?php
namespace App\Http\Livewire;

class ReglasEmpleados{
    public static function reglas(){
        return[
            'empleado.nombre'=>'required',
            'empleado.segundo_nombre'=>'required',
            'empleado.apellidopat'=>'required',
            'empleado.apellidomat'=>'required',
            'empleado.sexo'=>'required',
            'empleado.fecha_de_nacimiento'=>'required',
            'empleado.puesto_de_trabajo'=>'required',
            'empleado.telefono'=>'required'
        ];
    }
}
