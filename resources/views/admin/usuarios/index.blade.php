@extends('layouts.app')

@section('content')

@pagina_componente

    @cartaocrud_componente
          @slot('titulo')

                @titulo_componente
                Lista de usuários
                @endtitulo_componente
          @endslot

          @slot('conteudo')
            @alerta_componente
            @endalerta_componente

            @breadcrumb_componente(["lista" => $breadcrumb])
            @endbreadcrumb_componente



            <div class="row">
              <div class="col-6">
                @criar_componente(["rota" => $nomeRota])   <!-- Botao de criar esta nesse componente  -->
                @endcriar_componente
              </div>
              <div class="col-6">
                   <!-- Preenche a variavel busca senao tiver nada deixa vazio  -->
                  @busca_componente([
                  'action' => route($nomeRota.'.index'),
                  'busca' => $busca ?? ''
                  ])
                  @endbusca_componente
              </div>
            </div>

            @tabela_componente
                @slot('titulos')
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>
                @endslot
                @slot('registros')
                    @foreach ($lista as $key => $value)
                    <tr>
                      <th scope="row">{{$value->id}}</th>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email}}</td>
                      <td>

                          <form action="{{ route($nomeRota.'.deletar', $value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-warning" href="{{route($nomeRota.'.visualizar', $value->id)}}">Visualizar</a>
                            <a class="btn btn-info" href="{{route($nomeRota.'.editar', $value->id)}}">Editar</a>
                            <button class="btn btn-danger">Apagar</button>
                          </form>

                      </td>

                    </tr>
                    @endforeach
                @endslot
            @endtabela_componente

            @paginacao_componente(["lista" => $lista])
            @endpaginacao_componente

          @endslot
      @endcartaocrud_componente
@endpagina_componente

@endsection
