<?php 
class Empresa {
    public $nome;
    public $cnpj;
    public $ano;
    public $foco;
    
    
    public function __construct($n,$c,$a,$f) {
        $this->nome = $n;
        $this->cnpj = $c;
        $this->ano = $a;
        $this->foco = $f;

    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome == $n;
    }

    public function getCnpj() {
        return $this->cnpj;
    }
    public function setCnpj($c) {
        $this->cnpj == $c;
    }

    public function getAno() {
        return $this->ano;
    }
    public function setAno($a) {
        $this->ano== $a;
    }
    public function getFoco() {
        return $this->foco;
    }
    public function setFoco($f) {
        $this->foco== $f;
    }
    
    function tempo ()
    {
        return(2021-$this->ano);
    }

    function resumir()
	{
		echo "<P>SOBRE A EMPRESA</P>";
        echo "A empresa $this->nome (CNPJ:$this->cnpj), está no mercado a um pouco mais de ". $this->tempo()." ano, tendo em vista o foco de $this->foco";
	}
   
   
    
    
}






?>

