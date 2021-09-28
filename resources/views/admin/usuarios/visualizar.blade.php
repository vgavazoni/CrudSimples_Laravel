@extends('layouts.app')

@section('content')

@pagina_componente
    @cartaocrud_componente
            @slot('titulo')

              @titulo_componente
              Lista de usuários - Vizualizar
              @endtitulo_componente
            @endslot

          @slot('conteudo')
            @alerta_componente
            @endalerta_componente

            @breadcrumb_componente(["lista" => $breadcrumb])
            @endbreadcrumb_componente

            <h3>Categoria</h3>
            <p>Nome: {{$registro->name}}</p>
            <p>E-mail: {{$registro->email}}</p>

          @endslot
      @endcartaocrud_componente
  @endpagina_componente
@endsection
