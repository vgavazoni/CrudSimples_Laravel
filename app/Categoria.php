<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Categoria extends Model
{
  protected $fillable = [
      'nome'
  ];

  private $validate = [
      'nome'=>'required'
  ];

  private $paginacao = 5;

  public function lista()
  {
    return $this->orderBy('nome','asc')->paginate($this->paginacao);
  }

  public function busca(string $busca, array $colunas)
  {
    return $this->where(function($query) use($busca, $colunas) {
        foreach ($colunas as $key => $coluna) {
            if ($coluna['tipo'] == 'string') {
                $query->orWhere($coluna['coluna'], 'like', '%'.$busca.'%');
            }
            if ($coluna['tipo'] == 'number') {
                $query->orWhere($coluna['coluna'], '=', $busca);
            }

        }
    })->orderBy('nome','desc')->paginate($this->paginacao);
  }

  public function salvar($dados)
  {
      Validator::make($dados,$this->validate)->validate();   // Validando dados

    $ret = $this->create($dados);   // Create proprio do laravel

    if ($ret) {
      session()->flash('Msg','Registro criado com sucesso!');
      session()->flash('status','success');
      return $ret;
              } else {
                session()->flash('Msg','Erro no sistema!');
                session()->flash('status','danger');
                return $ret;
                    }
  }



  public function atualizar($dados)
  {
      Validator::make($dados,$this->validate)->validate();   // Validando dados

    $ret = $this->update($dados);  // Update proprio do laravel

    if ($ret) {
      session()->flash('Msg','Registro atualizado com sucesso!');
      session()->flash('status','success');
      return $ret;
              } else {
                session()->flash('Msg','Erro no sistema!');
                session()->flash('status','danger');
                return $ret;
                    }
  }


      public function deletar()
      {
            $this->delete();
            session()->flash('Msg','Registro deletado com sucesso!');
            session()->flash('status','success');
      }










}
