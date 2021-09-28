@extends('layouts.app')

@section('content')
    @pagina_componente
        @cartaocrud_componente
                @slot('titulo')

                  @titulo_componente
                  Lista de veículos - Criar
                  @endtitulo_componente
                @endslot

              @slot('conteudo')
                @alerta_componente
                @endalerta_componente

                @breadcrumb_componente(["lista" => $breadcrumb])
                @endbreadcrumb_componente


                  <form class="" action="{{ route($nomeRota.'.salvar')  }}" method="post" >
                <!--    <div class="form-group"><input type="file" name="image" value="teste"></div>     enctype="multipart/form-data" -->
                  @csrf
                  @include('admin.'.$nomeRota.'.formulario')
                  <button class="btn btn-primary">Criar</button>
                  <form>

              @endslot
          @endcartaocrud_componente
      @endpagina_componente
@endsection
