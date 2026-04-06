<?php

/* AULA 04 DESAFIO 01
include "../config/config.php";

echo "Bem-vindo, " . $_SESSION["usuario"] . "<br>";
echo $_SESSION["perfil"];
?>
*/



/* AULA 04 DESAFIO 02
 <?php
include "../config/config.php";

$perfil = $_SESSION["perfil"];
$usuario = $_SESSION["usuario"];

if ($perfil == "cliente") {
    echo "Ola " . $usuario . " Bem vindo a area de clientes";
} elseif ($perfil == "empresa") {
    echo "Ola " . $usuario . " Bem vindo a area da empresa";
}
    */

// arnaldo Aula 5 desafio 1 meio que eu ja fiz aqui
// arnaldo Aula 5 desafio 2 feito aqui tambem
include "../config/config.php";
include "../includes/auth.php";

$perfil = $_SESSION["perfil"];
$usuario = $_SESSION["usuario"];

if ($perfil == "cliente") {
    echo "Ola " . $usuario . " Bem vindo a area de clientes";
} elseif ($perfil == "proprietario") {
    echo "Ola " . $usuario . " Bem vindo a area administrativa";
} elseif ($perfil == "financeiro") {
    echo "Ola " . $usuario . " Relatorios";
}

?>