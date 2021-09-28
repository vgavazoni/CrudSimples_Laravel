<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Validator;

class Veiculo extends Model
{
  protected $fillable = [
      'placa','modelo','ano','marca','chassi','renavam','cor','seguradora','status'
  ];

  private $validate = [
      'placa'=>['required'],
      'modelo'=>['required'],
      'ano'=>['required'],
      'marca'=>['required'],
      'chassi'=>['required'],
      'renavam'=>['required'],
      'cor'=>['required'],
      'seguradora'=>['required'],
      'status'=>['required'],

  ];

  private $paginacao = 5;

  public function lista()
  {
    return $this->orderBy('placa','asc')->paginate($this->paginacao);
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
    })->orderBy('placa','asc')->paginate($this->paginacao);
  }

  public function salvar($dados)
  {
      Validator::make($dados,$this->validate)->validate();   // Validando dados

  /*    $dados['image'] = $this->validate;
      if (isset($dados) && $this->validate->isValid()){
          if ($this->validate) {
            $name = $this->image;
          }  else {
            $name = $this->id.$this->placa;
          }

          $entension = $dados->image->extension();
          $nameFile = "{$name}.{$extension}";
          $dados['image'] = $nameFile;

        $upload = $dados->image->storeAs('images', $nameFile);

        if (!$upload) {
            return redirect()
            ->back()
            ->with('Erro', 'Falha ao fazer o upload!');
        }

      }  */

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
