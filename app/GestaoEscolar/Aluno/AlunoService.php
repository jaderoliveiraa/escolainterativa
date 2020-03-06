<?php

namespace App\GestaoEscolar\Aluno;

use AlunoRepository;

class AlunoService
{
	/*
	*Instancia de AlunoRepository
	* @var AlunoRepository
	*/
    private alunoRepository;

    /*
	*Instancia de Classe AlunoService
	* @param App\GestaoEscolar\Aluno\AlunoRepository
	* @param AlunoRepository
	*/

    public function __construct(AlunoRepository $alunoRepository){

        this => alunoRepository = $alunoRepository;

    }

}
