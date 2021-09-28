<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function lista(){
      return (object) [
        (object) ["nome"=>"Vini"],
        (object) ["nome"=>"Mario"],
        (object) ["nome"=>"Fernanda"],
      ];
    }
}
