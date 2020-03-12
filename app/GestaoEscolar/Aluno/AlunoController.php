<?php

namespace App\GestaoEscolar\Aluno;

use App\Http\Controllers\Controller
use App\GestaoEscolar\Aluno\AlunoService;

class AlunoController extends Controller
{
	/*
	*Instancia de AlunoService
	* @var App\GestaoEscolar\Aluno\AlunoService
	*/
    protected $alunoService;

    /*
	*Instancia de Classe AlunoController
	*
	* @param App\GestaoEscolar\Aluno\alunoService
	* @param alunoService
	*/

    public function __construct(AlunoService $alunoService){

        $this->alunoService = $alunoService;

    }

}
