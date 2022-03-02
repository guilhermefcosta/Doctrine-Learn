<?php


namespace Empresa\Pacote\Help;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once  __DIR__ . "/../../vendor/autoload.php";

class EntityManagerFactory
{

    public function getEntityManager()
    {

        $rootDir = __DIR__ . '/../..';
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(
            array(
                $rootDir."/src"
            ),
            $isDevMode
        );
            
        $conn = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => 'Darknet1:',
            'dbname'   => 'Doctrine',
        );
        
        // obtaining the entity manager
        $entityManager = EntityManager::create($conn, $config);
        return $entityManager;
    }

}