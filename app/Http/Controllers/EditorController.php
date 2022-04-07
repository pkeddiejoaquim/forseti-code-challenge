<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Texto;

class EditorController extends Controller
{
    private $request;
            
    public function __construct(Request $request)
    {
       // $this->middleware('auth');
       //dd($request); 
       $this->request = $request;  
    }

    public function editor()
    {
        return view('auth/editor');
        
    }

    public function mostratextos( Texto $texto )
    {
        $textos = $texto->all(); 
        return view('auth.listatextos', compact('textos'));       
       
    }
    
    public function gravatexto()
    {
        return 'Grava Textos';
/*
$dadosform = $request->except('_token');
        
        $insert = $this->texto->insert($dadosform); 
        
        if ($insert)
        {    
            return 'Cadastrado';
        } else {
            return redirect()->back();
        }
  */        
        
    }
    
}
