@extends('layouts.app')

@section('content')

@pagina_componente
    @cartaocrud_componente
            @slot('titulo')

              @titulo_componente
              Lista de categorias - Vizualizar
              @endtitulo_componente
            @endslot

          @slot('conteudo')
            @alerta_componente
            @endalerta_componente

            @breadcrumb_componente(["lista" => $breadcrumb])
            @endbreadcrumb_componente

            <h3>Categoria</h3>
            <p>{{$registro->nome}}</p>

          @endslot
      @endcartaocrud_componente
  @endpagina_componente
@endsection
