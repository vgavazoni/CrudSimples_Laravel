@extends('layouts.app')

@section('content')

@pagina_componente
    @cartaocrud_componente
            @slot('titulo')

              @titulo_componente
              Lista de veículos - Vizualizar
              @endtitulo_componente
            @endslot

          @slot('conteudo')
            @alerta_componente
            @endalerta_componente

            @breadcrumb_componente(["lista" => $breadcrumb])
            @endbreadcrumb_componente

            <h3>Veículo</h3>
            <p>{{$registro->foto}}</p>
            <p>{{$registro->placa}}</p>
            <p>{{$registro->modelo}}</p>
            <p>{{$registro->ano}}</p>
            <p>{{$registro->marca}}</p>
            <p>{{$registro->chassi}}</p>
            <p>{{$registro->renavam}}</p>
            <p>{{$registro->cor}}</p>
            <p>{{$registro->seguradora}}</p>
            <p>{{$registro->status}}</p>
          @endslot
      @endcartaocrud_componente
  @endpagina_componente
@endsection
