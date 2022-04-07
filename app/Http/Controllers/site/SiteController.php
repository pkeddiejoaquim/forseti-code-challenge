<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth')->
               only([
                        ''
                    ]);

    }

    public function quemsomos()
    {
        return view('site/quemsomos');
    }


}
