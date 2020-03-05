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
     * The list of models classes that should not be affected with touch.
     *
     * @var array
     */
    protected $fillable = Array('nome', 'email', 'sexo', 'endereco', 'telefone');
}
