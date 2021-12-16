<?php

namespace App\Http\Livewire\Usuarios;


class ReglasUsuarios
{
    public static function reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return [
            'usuario.nombre_usuario' => 'required|string',
            'usuario.email' => 'required|email|unique:usuarios,email,' . $id,
            'foto' => 'nullable|image',
            'password' => $validarPassword,
            'confirmar_password' => 'same:password'
        ];
    }
}
