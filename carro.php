
<?php 
class Carro {
    public $modelo;
    public $ano;
    public $valor;
    
    
    public function __construct($m,$a,$v) {
        $this->modelo = $m;
        $this->ano = $a;
        $this->valor = $v;

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

    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->Valor == $v;
    }

    function resumir()
	{
		
        echo "O Carro é do modelo $this->modelo,do ano $this->ano e o aluguel custa: $this->valor";
	}
   
    
    
}






?>

    
</body>
</html>