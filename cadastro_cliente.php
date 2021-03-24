<?php
session_start();
header('Access-Control-Allow-Origin: *');
require "conexao.php";

$id_usuario = $_SESSION['idusuario'];
$query_ = "SELECT * FROM clientes WHERE ce_id_cliente = $id_usuario ORDER BY nome_cliente ASC";
$result = $conn->query($query_);
$dados_cliente = array();


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $dados_cliente[] = $row['nome_cliente'] . '#' . $row['cpf'] . "#" . $row['idade'] . "#" . $row['profissao'] . "#" . $row['renda'] ;
    
  }
} else {

  echo ("<script>
        window.alert('Você não possui clientes cadastrados.')
        window.location.href='../Login/home.php';
    </script>");
}

$conn->close();