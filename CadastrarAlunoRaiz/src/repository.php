<?php
require_once __DIR__ . '/../config/db.php';

function listar_usuarios() : array
{
   $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
return db()->query($sql)->fetchAll();
}
function login_usuario(string $nome, string $senha ) : array
{
    $sql = "SELECT nome, perfil, senha FROM usuario WHERE nome = ?";
    $stmt = db()->prepare($sql);
    $stmt->execute([$nome]);
    $usuario = $stmt->fetch();
    return $usuario ?: [];
}
function cadastro_usuario(string $nome, string $senha) : int
{
    $sql = "INSERT INTO usuario (nome, senha) VALUES (?,?)";
    $stmt = db()->prepare($sql);
    $stmt->execute([$nome, $senha]);
    return (int) db()->lastInsertId();
}

function criar_conta(int $id_usuario, ?string $descricao, string $tipo, float $valor): int
{
    $sql = "INSERT INTO contas (id_usuario, tipo, descricao, valor) VALUES (?,?,?,?)";
    $stmt = db()->prepare($sql);
    $stmt->execute([$id_usuario, $descricao, $tipo, $valor]);
    return (int) db()->lastInsertId();
}

function buscar_conta(int $id_conta) : ?array
{
    $sql = "SELECT * FROM contas WHERE id_conta= ?";
    $stmt = db()->prepare($sql);
    $stmt->execute([$id_conta]);
    $row = $stmt->fetch();
     return $row ?: null;
}

function atualizar_conta(int $id_conta, string $tipo, string $descricao, float $valor) : bool 
{
    $sql = "UPDATE contas SET tipo = ?, descricao = ?, valor = ? WHERE id_conta = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$tipo, $descricao, $valor, $id_conta]); 
}

function excluir_conta(int $id_conta) 
{
    $sql = "DELETE FROM contas WHERE id_conta = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$id_conta]);
}
?> 