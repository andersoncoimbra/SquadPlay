<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return response()->json([
            'titulo' => 'Administração',
            'imagem' => 'pasta da imagem'
        ]);
    }

    public function novidades()
    {
        return response()->json([
            'titulo' => 'Novidades',
            'imagem' => 'pasta da imagem'
        ]);
    }

    public function atleticas()
    {
        return response()->json([
            'titulo1' => 'Castores',
            'titulo2' => 'Mustang',
            'titulo3' => 'Jusrisparta',
            'titulo4' => 'Indomarvel',
            'titulo5' => 'DEstemida',
            'titulo6' => 'Bulldogs'
        ]);
    }
}
