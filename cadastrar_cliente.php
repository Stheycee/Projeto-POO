<?php

session_start();
header('Access-Control-Allow-Origin: *');


require("conexao.php");
$nome = $_POST['nome_cliente'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$profissao = $_POST['profissao'];
$renda = $_POST['renda'];

$id_usuario = $_SESSION['idusuario'];
$stmt = $conn->prepare("INSERT INTO clientes (ce_id_cliente,nome_cliente,cpf,idade,profissao,renda) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("isssss", $id_usuario, $nome, $cpf, $idade, $profissao, $renda);
$stmt->execute();
$conn->close();
header('Location:home.php');