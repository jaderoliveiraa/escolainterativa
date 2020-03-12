<?php

namespace App\GestaoEscolar\Aluno;

use App\GestaoEscolar\Aluno\Aluno;

class AlunoRepository
{
    /*
    *Instancia de Aluno
    * @var App\GestaoEscolar\Aluno\Aluno
    */
    private $aluno;

    /*
    *@var Instância da classe AlunoRepository
    *
    *@param App\GestaoEscolar\Aluno\Aluno
    *@param Aluno
    */
    public function __construct(Aluno $aluno){

        $this->aluno = $aluno;

    }

}
