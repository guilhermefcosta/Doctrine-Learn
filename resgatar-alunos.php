<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

$alunoRespositorio = $em->getRepository(Aluno::class);

/**
 * @var Aluno[] 
 */
$alunos = $alunoRespositorio->findAll();

foreach ($alunos as $aluno) {
    echo $aluno->getId() . "\t". $aluno->getNome() . "\n\n";
}

print "===================|==================\n\n";

/**
 * @var Aluno[] 
 */
$alunos = $alunoRespositorio->findBy(
    [],
    [
        "id" => "DESC"
    ]
);


foreach ($alunos as $aluno) {
    echo $aluno->getId() . "\t". $aluno->getNome() . "\n\n";
}

print "===================|==================\n\n";

/**
 * @var Aluno[] 
 */

$aluno = $alunoRespositorio->findBy(
    [
        "nome" => "Guilherme Ferreira"
    ]
);

var_dump($aluno);

