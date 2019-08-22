<?php
/**
 * 
 */


require "./vendor/autoload.php";

ini_set("display_errors", 1);
error_reporting(E_ALL|E_WARNING);

use \Model\Aluno;
use \Persistence\Connection as Con;

$pdo = Con::connect();
$aluno = new Aluno(10, "Henrique");
echo "Nome do aluno: " . $aluno->getNome();
