<?php 
class Alugados {
    public $modelo;
    public $ano;
    public $valor;
    public $cliente;
    public $quando;

    
    
    public function __construct($m,$a,$v,$c,$q) {
        $this->modelo = $m;
        $this->ano = $a;
        $this->valor = $v;
        $this->cliente = $c;
        $this->quando = $q;

    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo == $m;
    }

    public function getAno() {
        return $this->ano;
    }
    public function setAno($a) {
        $this->ano == $a;
    }

    public function getCliente() {
        return $this->cliente;
    }
    public function setCliente($c) {
        $this->cliente == $c;
    }
    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->Valor == $v;
    }
    public function getQuando() {
        return $this->quando;
    }
    public function setQuando($q) {
        $this->quando == $q;
    }



    function resumir()
	{
		
        echo "<p>O Carro é do modelo $this->modelo,do ano $this->ano e o aluguel custa: $this->valor</p>";
        echo "<p>O Carro está alugado ao cliente $this->cliente,o mesmo(a) alugou no dia $this->quando</p>";
	}
   
    
    
}






?>
