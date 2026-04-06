<?php
include "../config/config.php";

$perfil = $_SESSION["perfil"];
$usuario = $_SESSION["usuario"];

if ($perfil == "cliente") {
    echo "Ola " . $usuario . " Bem vindo a area de clientes";
} elseif ($perfil == "empresa") {
    echo "Ola " . $usuario . " Bem vindo a area da empresa";
}
?>