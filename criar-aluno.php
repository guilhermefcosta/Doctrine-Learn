<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Entity\Telefone;
use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

$aluno = new Aluno();
$aluno->setNome($argv[1]);

for ($i = 2; $i < $argc; $i++) {
    $telefone = new Telefone();
    $telefone->setNumTelefone($argv[$i]);
    $aluno->addTelefone($telefone); // ja temos cascade(remove e persist)
}

$em->persist($aluno);
$em->flush();

