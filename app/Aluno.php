<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'aluno';

    /**
    * The attributes that aren't mass assignable. 
    * @var array
    */
    protected $guarded = ['id']; 

    /**
    * App\Aluno {#3035
         id: 1,
         nome: "João Silva",
         email: "joao@joao.com",
         sexo: "MASCULINO",
         endereco: "rua n",
         telefone: "88988424488",
         created_at: "2020-03-05 01:24:42",
         updated_at: "2020-03-05 01:24:42",
       },
       App\Aluno {#3037
         id: 2,
         nome: "Jader Oliveira",
         email: "jaderoliveiraa@gmail.com",
         sexo: "MASCULINO",
         endereco: "rua vereador xavier de oliveira, 68",
         telefone: "88988420622",
         created_at: "2020-03-05 01:26:03",
         updated_at: "2020-03-05 01:26:03",*/
}
