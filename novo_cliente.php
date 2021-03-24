<?php
require "menu.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>

<form action="cadastrar_cliente.php" method="POST">


<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Nome</label>
  <input name="nome_cliente" type="text" class="form-control">
  <div id="emailHelp" class="form-text">Digite o nome do cliente</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">CPF</label>
  <input name="cpf" type="number" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite o CPF</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Idade</label>
  <input name="idade" type="number" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite a idade</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Profissão</label>
  <input name="profissao" type="text" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite a Profissão</div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Renda</label>
  <input name="renda" type="number" step="any" class="form-control">
  <div id="emailHelp" class="form-text">Digite a Renda</div>
</div>
<a type="button" class="btn btn-primary" href="home.php">Voltar</a>
<button type="submit" class="btn btn-success">cadastrar</button>
</form>
</div>




