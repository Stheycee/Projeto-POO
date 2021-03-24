<?php 
require_once "dados.php";
require_once "menu.php";
class Cliente extends Dados
{
    public $profissão;
    public $renda;
    
    
    public function __construct($n,$c,$i,$p,$r) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        $this->profissão = $p;
        $this->renda = $r;

    }


    public function getProfissão() {
        return $this->profissão;
    }
    public function setProfissão($p) {
        $this->profissão == $p;
    }
    public function getRenda() {
        return $this->renda;
    }
    public function setRenda($r) {
        $this->renda == $r;
    }

    function desconto ()
    {
        if ($this->renda>= 1500) {
            echo "<p>Como a renda é maior que 1500 damos o direito a uma manutenção gratis, data a combinar.</p>";
        }
    }
    
    function resumir()
	{
		
        echo "$this->nome, com a idade de $this->idade anos e é portador do Número de CPF: $this->cpf. Profissão:$this->profissão e Renda: $this->renda. ";
        $this->desconto();
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
                Clientes
              </div>
              <div class="card-body">
              <?php
              

              $p1 = new Cliente ("Karina","111.111.111-11","28","Enfermeira","2.500,00");
              $p1->resumir();
              echo '<hr />';
              $p2 = new Cliente ("Maria","222.222.222-22","40","Cozinheira","4.000,00");
              $p2->resumir();
              echo '<hr />';
              echo '<br />';
              echo '<br />';

              ?>

                 <a type="button" class="btn btn-primary" href="home.php">Voltar</a>

              
    

              </div>
            </div>
          </div>
        </div>
    
</body>
</html>