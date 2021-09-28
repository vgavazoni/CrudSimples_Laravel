<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cliente;  // Classe importada para usar aqui

class ClienteController extends Controller
{
    public function lista(){

      $cliente = new Cliente;  // Conexao do controle com o modelo

    //  dd($cliente->lista());   // Chamando a lista() que eu criei em Cliente - lista de obejtos vai gerar

    $lista = $cliente->lista();

    return view('cliente', compact('lista'));    // Colocar o nome da variavel lista dentor do compact



    }
}
