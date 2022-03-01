<?php

// cli-config.php

use Empresa\Pacote\Help\EntityManagerFactory;

require_once __DIR__  . "/../vendor/autoload.php";


$emf = new EntityManagerFactory();
$em = $emf->getEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);