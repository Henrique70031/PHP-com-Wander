<?php
/**
 * 
 */


require "./vendor/autoload.php";

use \Model\Aluno;

$aluno = new Aluno(10, "Henrique");
echo "Nome do aluno: " . $aluno->getNome();
