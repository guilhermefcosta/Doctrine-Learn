<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$aluno = new Aluno();
$aluno->setNome($argv[1]);

$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

$em->persist($aluno);
$em->flush();

