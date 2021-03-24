
<?php 
require_once "dados.php";
require_once "menu.php";
class Dono extends Dados{
    public $telefone;
    
    
    public function __construct($n,$c,$i,$telefone) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        $this->telefone =$telefone;

    }

    
    public function getTelefone()

	{
		return $this->telefone;
	}
    public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}

    function modificarNum($telefone)
	{
		$this->telefone = $telefone;
	}

    
   
   
    
    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div class="container">
        <div class="row">
    
          <div class="card-login">
            <div class="card">
              <div class="card-header cyan">
                Dono
              </div>
              <div class="card-body">
              <?php
              

              $p1 = new Dono ("João","111.111.111-11","28","98888-8888");
              $p1->resumir();
              echo '<hr />';

              ?>

                 <a type="button" class="btn btn-primary" href="home.php">Voltar</a>

              
    

              </div>
            </div>
          </div>
        </div>
    
</body>
</html>

