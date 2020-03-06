<?php

namespace App\GestaoEscolar\Aluno;

use Aluno;

class AlunoService
{
    private alunoRepository;
    public function __construct(alunoRepository $alunoRepository){

        this => alunoRepository = $alunoRepository;

    }

}
