<?php

namespace Empresa\Fonte\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Alunos")
 */
class Aluno 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string") 
     */
    private $nome;

    public function getId() : int {
        return $this->id;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $novoNome) : self {
        $this->nome = $novoNome;
        return $this;
    }


}