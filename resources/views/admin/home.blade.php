@extends('adminlte::page')



@section('content_header')
    <h1>Painel de Controle</h1>
@stop

@section('content')
<div class="col-md-6">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Controle de Noticias</h3>
        </div>
        <div class="box-body">
            <a class="btn btn-app">
                <span class="badge bg-yellow">3</span>
                <i class="fa fa-bullhorn"></i> Noticias
            </a>
            <a class="btn btn-app" href='{{ route('addnovidade') }}'>3</span><span class="badge bg-red">3</span>

                <i class="fa fa-plus"></i>
                Nova
            </a>
        </div>
        <!-- /.box-body -->
    </div>
    </div>
@stop