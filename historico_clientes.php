<?php
require "menu.php";
require "cadastro_cliente.php";
?>
<?php
$clientes = array();
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
          <h5 class="card-header">Clientes da Empresa</h5>
        </div>

        <table class="table table-success">
          <tr class="table-primary">
            <th>Nome</th>
            <th>CPF</th>
            <th>Idade</th>
            <th>Profissão</th>
            <th>Renda</th>
         
            

          </tr>
          <?php foreach ($dados_cliente as $clientes) {
              $dados_cliente = explode('#', $clientes);
              

            ?>


          <tr>

            <?php
              
                
                echo "<td class='table-blue'>";
                echo $dados_cliente[0];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_cliente[1];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_cliente[2];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_cliente[3];
                echo "</td>";
                echo "<td class='table-blue'>";
                echo $dados_cliente[4];
                echo "</td>";
                
              ?>
              
            </tr>
      </div>
    <?php } ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
    <a type="button" class="btn btn-primary" href="cliente.php">Resumo dos clientes</a>

  </div>