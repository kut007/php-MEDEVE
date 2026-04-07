<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <button type="button" class="btn btn-danger">Vermelho</button>
    <button type="button" class="btn btn-success">Verde</button>

<form> 
<div class="mb-3"> 
<label class="form-label">Nome</label> 
<input type="text" class="form-control"> 
</div> 
<div class="mb-3"> 
<label class="form-label">Gmail</label> 
<input type="number" class="form-control"> 
</div> 
<button class="btn btn-success">Enviar</button> 
</form> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Arnaldo</td>
      <td>30.00 Reais</td>
      <td>Eletronico</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Neris</td>
      <td>100.00 reais</td>
      <td>Carro</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ronaldo</td>
      <td>50.00  reais</td>
      <td>lanche</td>
    </tr>
  </tbody>
</table>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Saldo Atual do sistema</div>
  <div class="card-body">
    <h5 class="card-title">Saldo Atual do sistema:</h5>
    <p class="card-text">28.375$</p>
  </div>
</div>

    
</body>
</html>
