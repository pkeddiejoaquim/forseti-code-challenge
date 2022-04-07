<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usuario_perfil()
    {
        return 'Sistema de controle autorização e direitos de Usuario. ' ;
    }
}
