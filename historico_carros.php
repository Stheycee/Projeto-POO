<?php
require "menu.php";
require "cadastro_carro.php";


?>
<?php

$carros = array();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <style>
    .container {
      width: 100vw;
      height: 80vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center
    }

    .box {
      width: 500px;
      height: 500px;
      background: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="card">

        <div class="card text-center black-text">
          <h5 class="card-header">Carros da Frota</h5>
        </div>

        <table class="table table-success">
          <tr class="table-primary">
            <th>Modelo do carro</th>
            <th>ano</th>
            <th>placa</th>
         
            

          </tr>
          <?php foreach ($dados_carros as $carros) {
              $dados_carros = explode('#', $carros);
              

            ?>


          <tr>

            <?php
              
                
                echo "<td class='table-blue'>";
                echo $dados_carros[0];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_carros[1];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_carros[2];
                echo "</td>";
                
              ?>
              
            </tr>
      </div>
    <?php } ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
    <a type="button" class="btn btn-primary" href="carros.php">Resumo dos Carros</a>

  </div>