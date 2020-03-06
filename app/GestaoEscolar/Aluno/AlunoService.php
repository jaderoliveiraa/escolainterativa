<?php

namespace App\GestaoEscolar\Aluno;

use AlunoRepository;

class AlunoService
{
    private alunoRepository;
    public function __construct(AlunoRepository $alunoRepository){

        this => alunoRepository = $alunoRepository;

    }

}
