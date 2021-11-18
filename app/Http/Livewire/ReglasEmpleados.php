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
            'empleado.curp'=>'required',
            'empleado.rfc'=>'required',
            'empleado.estado_civil'=>'required',
            'empleado.codigo_postal'=>'required',
            'empleado.salario'=>'required',
            'empleado.correo'=>'required',
            'empleado.horario'=>'required',
            'empleado.area_de_trabajo'=>'required',
            'empleado.facebook'=>'required',
            'empleado.telefono'=>'required'
        ];
    }
}
