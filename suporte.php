<?php 
class Suporte {
    public $valor;
    public $finalidade;
    public $uso;
    public $modelo;
    
    
    public function __construct($v,$f,$u,$m) {
        $this->valor = $v;
        $this->finalidade = $f;
        $this->uso = $u;
        $this->modelo = $m;

    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->Valor == $v;
    }

    public function getFinalidade() {
        return $this->finalidade;
    }
    public function setFinalidade($f) {
        $this->finalidade == $f;
    }

    public function getUso() {
        return $this->uso;
    }
    public function setUso($u) {
        $this->uso == $u;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo == $m;
    }
   
    function resumir()
	{
		
        echo "O carro $this->modelo, tem suporte no valor de $this->valor. Com a $this->finalidade. Teve o uso deste suporte? $this->uso";
	}
   
   
    
    
}


?>
