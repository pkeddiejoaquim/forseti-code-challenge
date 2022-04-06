<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function administrador(Request $request)
    {
/*        
        $param = validator( $request->all(),[
           'email' => 'required | min:3 | max:100',
           'password' => 'required | min:3 | max:100',
        ]);
        
    //dd( $param->fails() );
        
        if ( $param->fails() ) {
           
            return redirect('admin/login')
                    ->withErros($param)
                    ->withInput(); 
        }
*/       
       
    return view('auth/adm'); 

        
        
    }
}    