<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icone.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Planilha</title>

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav>
    <div class="nav-wrapper blue lighten-3">
      <a href="#" class="brand-logo">
        Planilha
      </a>

    </div>
  </nav>
  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header cyan">
            Login
          </div>
          <div class="card-body">

            <form action="login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
              <?php if (isset($_GET['login']) &&  $_GET['login'] == 'erro2') { ?>
                <div class="text-danger">
                  Faça o login para acessar a página
                </div>
              <?php } ?>
              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro1') { ?>
						<div class="alert alert-danger" role="alert">
							Login e/ou senha incorreto(s).
						</div>

					<?php } ?>
					<?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
						<div class="alert alert-warning" role="alert">
							Para acessar é necessário ser cadastrado(a).
						</div>
					<?php } ?>
              <button class="waves-effect waves-light btn-large cyan lighten-3" type="submit">Entrar</button>




            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>


