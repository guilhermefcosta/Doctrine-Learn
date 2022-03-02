<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Entity\Telefone;
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
    $tels = $aluno->getTelefones();

    $arr = $tels->map(function (Telefone $n) {
        return $n->getNumTelefone();
    })->toArray();

    echo $aluno->getId() . "\t". $aluno->getNome()  . "\t". implode(",", $arr) ."\n\n";

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
