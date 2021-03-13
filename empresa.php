<?php
require_once "classeabstrata.php";
require_once "menu.php";


class Empresa extends Abstrata
{
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


echo '<br />';
echo '<br />';

        $e1 = new empresa ("Dick Vigarista","000000-00","2020","atender a todos que querem dar o primeiro passo para ter seu carro. Carros com qualidade e segurança, damos todos os suportes necessários para a contratação.");
        $e1->resumir();
        echo '<hr />';




?>

