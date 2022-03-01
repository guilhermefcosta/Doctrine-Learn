<?php

namespace Empresa\Fonte\Help;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
   
    public function getEntityManager() : EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        
        // pegar dados a partir de anotações
        $config = Setup::createAttributeMetadataConfiguration(
            [$rootDir . '/src'],
            true // development
        );
        
        // dados de conexao do sqlite
        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/var/data/banco.sqlite'
        ];

        return EntityManager::create($connection, $config);

    }
}
