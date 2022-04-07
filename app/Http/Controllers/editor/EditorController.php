<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Juridico\Texto;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;

class EditorController extends Controller
{
    private $totalitens = 4;
    private $texto;

    public function __construct(Texto $texto)
    {
        $this->middleware('auth')->only([
            'gravatexto',
            'editortexto'
        ]);

       // $this->middleware('auth');
       //dd($request);
       $this->texto = $texto;
    }

    public function editortexto()
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
        return view('site/construcao');
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

    public function i_mensagem()
    {
            $site = file_get_contents('https://www.gov.br/compras/pt-br/acesso-a-informacao/noticias');
            $param1 = '<a class="summary url" href="';
            $param2 = ' title="collective.nitf.content"';
            $param3 = '<span class="summary-view-icon"><i class="icon-day"></i>';
            $param4 = '<span class="summary-view-icon"><i class="icon-hour"></i>';
            $v_p1	= 'title';
            $v_p2	= 'por';
            $v_url1  = explode($param1 , $site);
            array_shift($v_url1);
            $cont0   = 0;
            $cont1   = 0;
            $registro= $this->texto;

//            echo "\n";
//            print_r($v_url1);


            foreach ($v_url1 as &$value) {

                $v_pos=(strpos($value,'publicado'));

                $url		= substr( $value,0,(strpos($value,$v_p1)-2));
                $descricao	= substr( $value,(strpos($value,$v_p1)+32),);

                $cont1      = ++$cont1;
                $registro->nm_arquivo = $url;
                $registro->descricao  = substr($descricao,0,254);
                if ( $registro->save())
                        $cont0 = ++$cont0;

            }

            return "<br> Inserido(s) com sucesso $cont0<br>Total de Registros $cont1";
            $cont = 0; $cont = 1;

    }
}
