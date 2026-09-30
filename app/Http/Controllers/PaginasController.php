<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio()
    {
        return view('paginas.inicio');
    }

    public function nosotros()
    {
        return view('paginas.nosotros');
    }

    public function productos()
    {
        return view('paginas.productos');
    }
}