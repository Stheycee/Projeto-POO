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

    public function manutenção(){
        if ($this->uso == "Sim" Or $this->uso == "SIM" Or $this->uso == "sim" Or $this->uso == "s" Or $this->uso == "S"){
            $this->manutenção = $this->valor-200;
            echo "<p>Pelo uso do suporte para a manutenção, o atual valor do suporte é de: $this->manutenção reais </p>";
        }else{
            echo "<p>Cliente sem uso do suporte</p>";
        }
    }
   
    function resumir()
	{
		
        echo "O carro $this->modelo, tem suporte no valor de $this->valor reais, Com a $this->finalidade. Teve o uso deste suporte? $this->uso";
        $this->manutenção();
	}
   
   
    
    
}


?>
