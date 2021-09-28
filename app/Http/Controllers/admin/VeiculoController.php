<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Veiculo;


class VeiculoController extends Controller
{

      private $model;
      private $pastaPrincipal;
      private $pastaSecundaria;
      private $nomeRota;

      public function __construct()
      {
        $this->model = new Veiculo;
        $this->titulo = 'Veiculo';
        $this->titulo_plural = 'Veiculos';
        $this->nomeRota = 'veiculos';
        $this->pastaPrincipal = 'admin';

      }

    public function index(Request $request)
    {
        $registro = $this->model;  // acessa o nosso modelo
        $titulo = $this->titulo;
        $nomeRota = $this->nomeRota;
        $busca = $request->busca ?? false;
        if ($busca) {
          $lista = $registro->busca($busca, [
        //    ['coluna' => 'imagem', 'tipo' => 'string'],
            ['coluna' => 'placa', 'tipo' => 'string'],
            ['coluna' => 'modelo', 'tipo' => 'string'],
            ['coluna' => 'ano', 'tipo' => 'string'],
            ['coluna' => 'marca', 'tipo' => 'string'],
            ['coluna' => 'chassi', 'tipo' => 'string'],
            ['coluna' => 'renavam', 'tipo' => 'string'],
            ['coluna' => 'cor', 'tipo' => 'string'],
            ['coluna' => 'seguradora', 'tipo' => 'string'],
            ['coluna' => 'status', 'tipo' => 'number'],
            ['coluna' => 'id', 'tipo' => 'number']
        // se tiver mais colunas    ['coluna' => 'descricao', 'tipo' => 'string']
          ]);  // O método busca vai receber a variavel busca
        } else {
          $lista = $registro->lista();
        }

        $breadcrumb = (object)[
          (object) ["titulo" => "Principal", "link" => route("site")],
          (object) ["titulo" => "Admin", "link" => route("home")],
          (object) ["titulo" => "Lista de $titulo", "link" => ""],
        ];
        return view("$this->pastaPrincipal.$nomeRota.index",compact('lista', 'breadcrumb', 'titulo', 'nomeRota', 'busca'));  // Mandar para a view por compact
    }


    public function criar(Request $request)
    {
          $registro = $this->model;  // acessa o nosso modelo
          $titulo = $this->titulo;
          $nomeRota = $this->nomeRota;
          $busca = $request->busca ?? false;
          $lista = $registro->busca($busca, [
        //    ['coluna' => 'imagem', 'tipo' => 'string'],
            ['coluna' => 'id', 'tipo' => 'number'],
            ['coluna' => 'status', 'tipo' => 'number']
        // se tiver mais colunas    ['coluna' => 'descricao', 'tipo' => 'string']
          ]);  // O método busca vai receber a variavel busca
          $breadcrumb = (object)[
            (object) ["titulo" => "Principal", "link" => route("site")],
            (object) ["titulo" => "Admin", "link" => route("home")],
            (object) ["titulo" => "Lista de $this->titulo_plural", "link" => route($this->nomeRota.'.index')],
            (object) ["titulo" => "Adicionar $titulo", "link" => ""],
          ];
        return view("$this->pastaPrincipal.$nomeRota.criar", compact('breadcrumb','titulo', 'nomeRota', 'lista'));
    }


    public function salvar(Request $request)
    {
        $dados = $request->all();  // pega as informacoes
        $registro = $this->model;  // acessa o nosso modelo
        $registro->salvar($dados);   // usando o metodo do modelo para salvar os dados
        return redirect()->route($this->nomeRota.'.index');  // faz o redirecionamento para o index


    //    dd(Categoria::all());
    }


    public function editar($id)
    {
        $registro = $this->model::find($id);  // Procura e salva na variavel registro o id
        $titulo = $this->titulo;
        $nomeRota = $this->nomeRota;
        if ($registro) {
          $breadcrumb = (object)[
            (object) ["titulo" => "Principal", "link" => route("site")],
            (object) ["titulo" => "Admin", "link" => route("home")],
            (object) ["titulo" => "Lista de $this->titulo_plural", "link" => route($this->nomeRota.'.index')],
            (object) ["titulo" => "Editar $titulo", "link" => ""],
          ];
            return view("$this->pastaPrincipal.$nomeRota.editar", compact('registro', 'breadcrumb','titulo', 'nomeRota'));
        }else {
            return redirect()->route($nomeRota.'.index');  // faz o redirecionamento para o index
        }
    }


    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();  // pega as informacoes
        $registro = $this->model::find($id);  // acessa o nosso modelo
        $registro->atualizar($dados);   // usando o metodo do modelo para salvar os dados
        return redirect()->route($this->nomeRota.'.index');  // faz o redirecionamento para o index
    }


    public function visualizar($id)
    {
      $registro = $this->model::find($id);  // Procura e salva na variavel registro o id
      $titulo = $this->titulo;
      $nomeRota = $this->nomeRota;
      if ($registro) {
        $breadcrumb = (object)[
          (object) ["titulo" => "Principal", "link" => route("site")],
          (object) ["titulo" => "Admin", "link" => route("home")],
          (object) ["titulo" => "Lista de $this->titulo_plural", "link" => route($this->nomeRota.'.index')],
          (object) ["titulo" => "Visualizar $titulo", "link" => ""],
        ];
          return view("$this->pastaPrincipal.$nomeRota.visualizar", compact('registro', 'breadcrumb','titulo', 'nomeRota'));
      }else {
          return redirect()->route($nomeRota.'.index');  // faz o redirecionamento para o index
      }
    }


    public function deletar($id)
    {
        $registro = $this->model::find($id);  // Procura e salva na variavel registro o id
        if ($registro) {
            $registro->deletar();
        }

        return redirect()->route($this->nomeRota.'.index');  // faz o redirecionamento para o index
    }






}
