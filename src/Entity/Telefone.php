<?php

namespace Empresa\Pacote\Entity;

/**
 * @Entity
 * Table(name="Telefone")
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(name="id_telefone", type="integer")
     *
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $numero;

    /**
     * @ManyToOne(targetEntity="Aluno", cascade={"remove", "persist"}, inversedBy="telefones")
     * @JoinColumn(name="id_aluno", referencedColumnName="id_aluno", onDelete="CASCADE")
     */
    private $aluno;

    public function getId() : int
    {
        return $this->id;
    }

    public function getNumTelefone() : string
    {
        return $this->numero;
    } 

    public function setNumTelefone(string $num) : self
    {
        $this->numero = $num;
        return $this;
    }

    public function getAluno() : Aluno
    {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno) : self
    {
        $this->aluno = $aluno;
        return $this;
    }

}