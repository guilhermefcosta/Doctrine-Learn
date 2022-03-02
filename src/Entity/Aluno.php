<?php

namespace Empresa\Pacote\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 * @Table(name="Alunos")
 */
class Aluno 
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(name="id_aluno", type="integer")
     */
    private $id;

    /**
     * @Column(type="string") 
     */
    private $nome;

    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="aluno", cascade={"persist"})
     */
    private $telefones;


    public function __construct()
    {
        $this->telefones = new ArrayCollection();
    }

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

    public function getTelefones() : Collection
    {
        return $this->telefones;
    }

    public function addTelefone(Telefone $tel) : self
    {
        $this->telefones->add($tel);
        $tel->setAluno($this);
        return $this;
    }
}