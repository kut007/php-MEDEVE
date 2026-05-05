<?php
require_once __DIR__ . '/../config/db.php';

function listar_usuarios() : array
{
   $sql = "SELECT * FROM usuario ORDER BY id_usuario DESC";
return db()->query($sql)->fetchAll();
}

function criar_conta(string $descricao, ?string $tipo, int $valor): int
{
    $sql = "INSERT INTO tarefas (titulo, descricao, status VALUES (?,?,?)";
    $stmt = db()->prepare($sql);
    $stmt->execute([$titulo, $descricao, $status]);
    return (int) db()->lastInsertId();
}

function buscar_conta(int $id) : ?array
{
    $sql = "SELECT * FROM tarefas WHERE ID= ?";
    $stmt = db()->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
     return $row ?: null;
}

function atualizar_conta(int $id, string $titulo, ?string $descricao, string $status) : bool 
{
    $sql = "UPDATE tarefas SET titulo = ?, descricao = ?, status = ? WHERE id = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$titulo, $descricao, $status, $id]); 
}

function excluir_conta(int $id) 
{
    $sql = "DELETE FROM tarefas WHERE id = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$id]);
}
?>