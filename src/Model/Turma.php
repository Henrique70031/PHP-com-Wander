<?php
/**
 * Classe Turma
 */

namespace Model;

class Turma {

    private $id;
    private $nome;

    /**
     * Método construtor da classe Turma com valores padrão dos atributos.
     * @param int $id
     * @param string $nome
     * @return void none
     */
    public function __constructor(int $id, string $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }

    /**
     * Retorna o id da turma
     * @param none
     * @return int $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Altera o id da turma
     * @param int $id
     * @return void none
     */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * Retorna o nome da turma
     * @param none
     * @return string $nome
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Altera o nome da turam
     * @param string $nome
     * @return void none
     */
    public function setnome(string $nome) {
        $this->nome = $nome;
    }
}