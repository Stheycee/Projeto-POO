<?php 
require_once 'pagar.php';
require_once 'menu.php';
class Pagamento implements Pagar {
    public $valor;
    public $forma;
    public $vencimento;
    public $cliente;
    public $data;
    
    
    public function __construct($v,$f,$vv,$c,$d) {
        $this->valor = $v;
        $this->forma = $f;
        $this->vencimento = $vv;
        $this->cliente = $c;
        $this->data = $d;

    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->Valor == $v;
    }

    public function getForma() {
        return $this->forma;
    }
    public function setForma($f) {
        $this->forma == $f;
    }

    public function getVencimento() {
        return $this->vencimento;
    }
    public function setVencimento($vv) {
        $this->vencimento == $vv;
    }
    public function getCliente() {
        return $this->cliente;
    }
    public function setCliente($c) {
        $this->cliente == $c;
    }
    public function getData() {
        return $this->data;
    }
    public function setData($d) {
        $this->Data == $d;
    }

    function pagamento(){
        if ($this->vencimento<=$this->data){
            $this->pagamento = $this->valor - 20;
            echo "<p>Pelo pagamento antecipado a fatura ficou no valor de: $this->pagamento reais </p>";
        }
    }



    function resumir()
	{
        echo "O(a) cliente $this->cliente fez o pagamento no valor de $this->valor,com o vencimento de dia: $this->vencimento, Forma de pagamento: $this->forma";
        $this->pagamento();
        echo '<br />';
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
                Pagamento
              </div>
              <div class="card-body">
              <?php
              

              echo "<P>obs.: o cliente que faz o pagamento antes da data de vencimento(sempre no dia 30 do mês) recebe um desconto de 20,00 reais no valor total.</P>";
              $a1 = new Pagamento ("400.00","Dinheiro","31/08/2020","Maria","30/08/2020");
              $a1->resumir();
              echo '<hr />';
              $a2 = new Pagamento ("350.00","Débito automatico","25/09/2020","Karina","30/09/2020");
              $a2->resumir();

              ?>

                 <a type="button" class="btn btn-primary" href="home.php">Voltar</a>

              
    

              </div>
            </div>
          </div>
        </div>
    
</body>
</html>


