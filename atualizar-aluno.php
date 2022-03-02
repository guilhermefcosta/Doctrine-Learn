<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

$repAluno = $em->getRepository(Aluno::class);

$id_aluno = $argv[1];
$novoNome = $argv[2];


/**
 * @var Aluno
 */
$aluno = $repAluno->find($argv[1]);

/* Como já peguei o aluno do banco
    não precisamos rodar o persist(aluno)
    pois essa instância já está sendo referenciada
    pelo Doctrine 
*/

$aluno->setNome($novoNome);

// salva alteracao no banco
$em->flush();