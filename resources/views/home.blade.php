@extends('layouts.app')

@section('content')

        @pagina_componente

            @cartaocrud_componente
                  @slot('titulo')

                        @titulo_componente
                        Admin
                        @endtitulo_componente
                  @endslot

                  @slot('conteudo')
                    @alerta_componente
                    @endalerta_componente

                    <div class="row">

                      @card_componente([
                      'titulo' => 'Usuários',
                      'descricao' => 'Controle de usuários',
                      'imagem' => 'images/usuarios.png',
                      'url' => route('usuarios.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Categorias',
                      'descricao' => 'Controle de categorias',
                      'imagem' => 'images/categorias.jpg',
                      'url' => route('categorias.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Veiculos',
                      'descricao' => 'Controle de veículos',
                      'imagem' => 'images/veiculos.png',
                      'url' => route('veiculos.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Clientes',
                      'descricao' => 'Controle de clientes',
                      'imagem' => 'images/clientes.jpg',
                      'url' => route('categorias.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Relatórios',
                      'descricao' => 'Lista de relatórios',
                      'imagem' => 'images/relatorios.png',
                      'url' => route('categorias.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Fluxo de caixa',
                      'descricao' => 'Controle de contas',
                      'imagem' => 'images/financeiro.jpg',
                      'url' => route('categorias.index'),
                      ])
                      @endcard_componente

                      @card_componente([
                      'titulo' => 'Locação de veículos',
                      'descricao' => 'Alugar veículo para cliente',
                      'imagem' => 'images/locacao.jpg',
                      'url' => route('categorias.index'),
                      ])
                      @endcard_componente


                    </div>


                    @endslot
                @endcartaocrud_componente
          @endpagina_componente

@endsection
