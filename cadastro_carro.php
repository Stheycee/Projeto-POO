<?php
session_start();
header('Access-Control-Allow-Origin: *');
require "conexao.php";
$id_usuario = $_SESSION['idusuario'];

$query_ = "SELECT * FROM carros WHERE ce_id_carros = $id_usuario ORDER BY modelo_carro ASC";
$result = $conn->query($query_);
$dados_carros = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $dados_carros[] = $row['modelo_carro'] . '#' . $row['ano_carro'] . "#" . $row['placa_carro'] ;
    
  }
} else {

  echo ("<script>
        window.alert('Você não possui carros cadastrados.')
        window.location.href='../Login/home.php';
    </script>");
}

$conn->close();