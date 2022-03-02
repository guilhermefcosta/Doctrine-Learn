<?php

use Empresa\Pacote\Entity\Aluno;
use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__ . "/vendor/autoload.php";

$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

/* Podemos ter duas abordagens aqui 

1) Em um site dinâmico, nós temos o id do usuario ao carregar a página,
   e, isso significa que fizemos uma query na instância inteira. Logo, 
   para deleta-lá basta dar um $em->remove(aluno)

2)  Temos também outra forma de pegar o usuario, que é por referencia
    $em->getReference(Aluno::class, id), dessa forma não gastamos uma 
    consulta no banco só para deletar. Mas não é muito utilizado em geral
    me parece
*/


// $refAluno = $em->getReference(Aluno::class, $argv[1]);
$repAluno = $em->getRepository(Aluno::class);

try {
    $aluno = $repAluno->find($argv[1]);
    $em->remove($aluno);
    $em->flush(); 
    echo "Usuário excluído com sucesso\n\n";
} catch (Exception $e) {
    echo "Não temos este usuário no banco\n\n";          
}

