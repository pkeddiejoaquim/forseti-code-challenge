<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class SessionController extends Controller
{
    public function session() 
    {
        $usuario = Session::all();
        /*    
        $saida = Arr::get( $usuario, "url", "Url não encontrada" );
        dd($usuario);
        */        
       /* session(['name','Edmilson Vindo do BD']);
        session(['email','admin@ca.com.br']);*/
 
        
        array_push( $usuario    ,   ['name', 'Edmilson PK Joaquim'], 
                                    ['email', 'admin@ca.com.br'], 
                                    ['nivel', 4],
                                    ['grup_id',10 ]
        );
       
       // $saida = Arr::get($usuario, 'email', "Url não encontrada" );
        //dd($saida);

        /*$novoArray = array_filter($usuario, function($filtro){
        //    return $filtro['email']=="email";
        });*/
        
        echo '<BR>';
        var_dump($usuario);
       // var_dump($novoArray);          
    }
            
}
