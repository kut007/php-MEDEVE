<?php 
include "config/config.php"; 
require_once __DIR__ . '/src/repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $senha = $_POST['senha'] ?? '';

    login_usuario($nome, $senha);
    echo "logado!";
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<h2>LOGIN MEDEVE!!!!!!!</h2>

<form method="POST">
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" name="nome" class="form-control" id="email" placeholder="Gmail">
    </div>
  </div>

  <div class="form-group row mt-3">
    <label for="senha" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="senha" class="form-control" id="senha" placeholder="Password">
    </div>
  </div>

  <div class="mt-3">
    <button type="submit" class="btn btn-primary">Logar</button>
  </div>
</form>

