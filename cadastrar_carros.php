<?php

session_start();
header('Access-Control-Allow-Origin: *');


require("conexao.php");
$modelo = $_POST['modelo_carro'];
$ano = $_POST['ano_carro'];
$placa = $_POST['placa_carro'];

$id_usuario = $_SESSION['idusuario'];
$stmt = $conn->prepare("INSERT INTO carros (ce_id_carros,modelo_carro,ano_carro,placa_carro) VALUES (?,?,?,?)");
$stmt->bind_param("isss", $id_usuario, $modelo, $ano, $placa);
$stmt->execute();
$conn->close();
header('Location:home.php'); 
