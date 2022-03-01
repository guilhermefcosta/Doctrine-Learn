<?php

declare(strict_types=1);

use Doctrine\ORM\EntityManagerInterface;
use Empresa\Fonte\Help\EntityManagerFactory;
use PHPUnit\Framework\TestCase;

final class EntityManagerFactoryTest extends TestCase
{

    public function testRetornaInterfaceDeGerenciadorDeEntidade(): void
    {
        $ent = new EntityManagerFactory();
        $this->assertInstanceOf(
            EntityManagerInterface::class,
            $ent->getEntityManager()
        );
    }

} 