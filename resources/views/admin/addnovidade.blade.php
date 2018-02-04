@extends('adminlte::page')

@section('content_header')
    <h1>Painel de Controle</h1><h4>Adicionar Novidade</h4>
@stop


@section('content')
    <div class="col-md-6">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Formulário para adicionar Novidade</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="POST" action="{{ route('postaddnovidade') }}" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Titulo da novidade" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" placeholder="Breve Descrição" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </div>
                <div class="form-group">
                    <label>Artigo</label>
                <textarea class="form-control" id="artigo" name="artigo" rows="3" placeholder="Conteudo do Artigo"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Imagem de Destaque</label>
                    <input type="file" name="img"  id="img">
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    </div>
@stop