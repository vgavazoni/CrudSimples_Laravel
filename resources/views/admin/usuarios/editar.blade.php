@extends('layouts.app')

@section('content')

@pagina_componente
    @cartaocrud_componente
            @slot('titulo')

              @titulo_componente
              Lista de usuários - Editar
              @endtitulo_componente
            @endslot

          @slot('conteudo')
            @alerta_componente
            @endalerta_componente

            @breadcrumb_componente(["lista" => $breadcrumb])
            @endbreadcrumb_componente

            <form action="{{ route($nomeRota.'.atualizar', $registro->id) }}" method="post">
              @csrf
              @method('PUT')
              @include('admin.'.$nomeRota.'.formulario')
              <button class="btn btn-primary">Atualizar</button>
            </form>

          @endslot
      @endcartaocrud_componente
  @endpagina_componente
@endsection
