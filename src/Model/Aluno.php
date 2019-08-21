<?php
/**
 * Classe Aluno
 * 
 */

namespace Model;

class Aluno
{
    private $id;
    private $nome;
    private $turma_id;

    /**
     * Método construtor da classe aluno com valores padrão dos atributos
     * @param int $id
     * @param string $nome
     * @param int $turma_id
     * @return void none
     */
    public function __construct(int $id=0, string $nome="", int $turma_id=0)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->turma_id = $turma_id;
    }

    /**
     * Retorna o id do aluno
     * @param none
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Altera o id do aluno
     * @param int $id
     * @return void none
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Retorna o nome do aluno
     * @param none
     * @return string $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Altera o nome do aluno
     * @param string $nome
     * @return void none
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Retorna o id da turma que o aluno pertence
     * @param none
     * @return int $turma_id
     */
    public function getTurmaId()
    {
        return $this->turma_id;
    }

    /**
     * Altera o id da turma que o aluno pertence
     * @param int $id
     * @return void none
     */
    public function setTurmaId(int $turma_id)
    {
        $this->turma_id = $turma_id;
    }
}
