<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novidades;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.home');
    }
    public function addnovidades()
    {
        return view('admin.addnovidade');
    }

    public function postaddnovidades(Request $request)
    {
        $news = new Novidades();
        $news->titulo = $request->titulo;
        $news->descricao = $request->descricao;
        $news->artigo = $request->artigo;
        $news->imagem = $request->file('img')->store('avatars');

        $news->save();
        return response()->json($news);
    }

    public function novidades()
    {
        //$news = Novidades::all();
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
