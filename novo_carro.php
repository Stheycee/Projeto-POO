<?php
require "menu.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>

<form action="cadastrar_carros.php" method="POST">


<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">carro</label>
  <input name="modelo_carro" type="text" class="form-control">
  <div id="emailHelp" class="form-text">Digite o modelo do carro</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ano</label>
  <input name="ano_carro" type="number" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite o ano do carro</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">placa</label>
  <input name="placa_carro" type="text" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite a placa do carro</div>
</div>
<a type="button" class="btn btn-primary" href="home.php">Voltar</a>
<button type="submit" class="btn btn-success">cadastrar</button>
</form>
</div>


