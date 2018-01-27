<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Novidades extends Controller
{
    //

    public function index()
    {
        return response()->json([
            'titulo' => 'Novidades',
            'imagem' => 'pasta da imagem'
        ]);
    }
}
