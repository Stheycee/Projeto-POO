<?php 

class Carros {
    public $modelo;
    public $ano;
    public $placa;
    
    
    public function __construct($m,$a,$p) {
        $this->modelo = $m;
        $this->ano = $a;
        $this->placa = $p;

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

    public function getPlaca() {
        return $this->placa;
    }
    public function setPlaca($p) {
        $this->placa == $p;
    }

    function resumircarro()
	{
		
        echo "O Carro é do modelo $this->modelo,do ano $this->ano e placa = $this->placa";
        
	}
   
    function idade ()
    {
        return(2021-$this->ano);
    }
    
}
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


echo "<P>CARROS DA FROTA</P>";
$c1 = new Carros ("Gol","2011","DEC2501");
$c1->resumircarro();
echo ", atualmente com o tempo de vida de " . $c1->idade() . " anos";
echo '<hr />';
$c2 = new Carros ("UNO","2015","HEL10512");
$c2->resumircarro();
echo ", atualmente com o tempo de vida de " . $c2->idade() . " anos";
echo '<hr />';
$c3 = new Carros ("Prisma","2019","MOR1005");
$c3->resumircarro();
echo ", atualmente com o tempo de vida de " . $c3->idade() . " anos";
echo '<hr />';
$c4 = new Carros ("Argo","2019","ALM3323");
$c4->resumircarro();
echo ", atualmente com o tempo de vida de " . $c3->idade() . " anos";
echo '<hr />';
$c5 = new Carros ("Fiat Mobi","2015","NFI2225");
$c5->resumircarro();
echo ", atualmente com o tempo de vida de " . $c3->idade() . " anos";
echo '<hr />';
echo '<br />';
echo '<br />';


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