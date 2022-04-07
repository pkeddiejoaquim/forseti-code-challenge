<?php

namespace App\Http\Controllers\Juridico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juridico\texto;
use Yajra\DataTables\Facades\DataTables;


class JuridicoController extends Controller
{
    private $totalitens = 4;
    private $texto;

    public  function __construct(Texto $texto)
    {
        $this->middleware('auth')->
                only([
                        ''
                ]);

        $this->texto = $texto;
    }

    public function inicio()
    {
        return view('juridico/inicio');
    }

    public function menu_jur()
    {
        return view('juridico/menu_jur');
    }

    public function listatextos()
    {
        $titulo  = 'Ultimas Mensagens';
        $textos = texto::paginate($this->totalitens);
        return view('juridico.textos.listatextos'
                    , ['titulo' =>$titulo]
                    , ['textos'=>$textos]
                );

             //dd($textos);
    }

 public function testando()
    {
        $titulo  = 'Listagem de Textos';
        $textos = texto::paginate($this->totalPage);
        return view('juridico.textos.testando'
                    , ['titulo' =>$titulo]
                    , ['textos'=>$textos]
                );

             //dd($textos);
    }

    public function peticionar()
    {

    }

    public function construcao()
    {
        return view('construcao');
    }
}
