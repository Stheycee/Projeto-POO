<?php 

class Alugados {
    public $cliente;
    public $quando;
    public $dados;
    public $valor;


    
    
    public function __construct($c,$q,$v) {
        
        $this->cliente = $c;
        $this->quando = $q;
        $this->valor = $v;
        

    }

    public function getDados() {
        return $this->dados;
    }
    public function setDados($d) {
        $this->dados == $d;
    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->valor == $v;
    }


    public function getCliente() {
        return $this->cliente;
    }
    public function setCliente($c) {
        $this->cliente == $c;
    }
    public function getQuando() {
        return $this->quando;
    }
    public function setQuando($q) {
        $this->quando == $q;
    }



    function resumir()
	{
		
        echo "<p>O Carro está alugado ao cliente: $this->cliente, alugando o carro há $this->quando meses</p>";
        
        
	}
   
    public function lucro()
    {
        return ($this->valor * $this->quando);
    }
    
}


echo "<P>CARROS ALUGADOS</P>";
$a1 = new Alugados ("Maria","10","300.00");
$a1->setDados($c1->Resumircarro());
$a1->resumir();
echo "Lucro bruto: " . $a1->lucro();
echo '<hr />';

$a2 = new Alugados ("Karina","8","350.00");
$a2->setDados($c2->Resumircarro());
$a2->resumir();
echo "Lucro bruto: " . $a2->lucro();
echo '<hr />';
echo '<br />';
echo '<br />';





?>
