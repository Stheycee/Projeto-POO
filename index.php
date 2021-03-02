<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icone.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Planilha de Controle</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper blue lighten-3">
      <a href="#" class="brand-logo">
       
        Planilha de Controle
      </a>
    </div>
  </nav>
  
    <?php
        require_once 'dono.php';
        require_once 'carro.php';
        require_once 'empresa.php';
        require_once 'alugados.php';
        require_once 'pagamento.php';
        require_once 'suporte.php';
        require_once 'cliente.php';
        echo '<br />';

        $e1 = new empresa ("Dick Vigarista","000000-00","2020","atender a todos que querem dar o primeiro passo para ter seu carro. Carros com qualidade e segurança, damos todos os suportes necessários para a contratação.");
        $e1->resumir();
        echo '<hr />';
        
        $p1 = new Dono ("João","111.111.111-11","28");
        $p1->resumir();
        echo '<hr />';
        echo '<br />';
        echo '<br />';

        echo "<P>CLIENTES</P>";
        $p1 = new Cliente ("Maria","111.111.111-11","28","Enfermeira","2.500,00");
        $p1->resumir();
        echo '<hr />';
        $p2 = new Cliente ("Karina","222.222.222-22","40","Cozinheira","4.000,00");
        $p2->resumir();
        echo '<hr />';
        echo '<br />';
        echo '<br />';
        
        echo "<P>CARROS DISPONÍVEIS</P>";
        $c1 = new Carro ("Fusca","2000","200,00");
        $c1->resumir();
        echo '<hr />';
        $c2 = new Carro ("UNO","2015","350,00");
        $c2->resumir();
        echo '<hr />';
        $c3 = new Carro ("Prisma","2019","450,00");
        $c3->resumir();
        echo '<hr />';
        echo '<br />';
        echo '<br />';


        echo "<P>CARROS ALUGADOS</P>";
        $a1 = new Alugados ("Argo","2019","400,00","Maria","08/08/2020");
        $a1->resumir();
        echo '<hr />';
        $a2 = new Alugados ("Fiat Mobi","2015","350,00","Karina","10/09/2020");
        $a2->resumir();
        echo '<hr />';
        echo '<br />';
        echo '<br />';

        echo "<P>SUPORTE</P>";
        $a1 = new Suporte ("1000,00","Finalidade para o pagamento do seguro, conserto em geral que o carro precisar, o pagamento é feito quando o carro é alugado,quando usado é preciso completar o valor caso o cliente continue com a locação do veiculo","Não","Argo");
        $a1->resumir();
        echo '<hr />';
        $a2 = new Suporte ("1000,00","Finalidade para o pagamento do seguro, conserto em geral que o carro precisar, o pagamento é feito quando o carro é alugado,quando usado é preciso completar o valor caso o cliente continue com a locação do veiculo","Sim","Fiat Mobi");
        $a2->resumir();
        echo '<hr />';
        echo '<br />';
        echo '<br />';


        echo "<P>PAGAMENTOS</P>";
        $a1 = new Pagamento ("400,00","Dinheiro","22/08/2020","Maria");
        $a1->resumir();
        echo '<hr />';
        $a2 = new Pagamento ("350,00","Débito automatico","25/09/2020","Karina");
        $a2->resumir();

        

    ?>  

</body>

</html>