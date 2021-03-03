<?php 
class Pagamento {
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
        echo "O(a) cliente $this->cliente fez o pagamento no valor de $this->valor,com o vencimento de dia: $this->vencimento, optando em pagar por meio de $this->forma";
        $this->pagamento();
        echo '<br />';
	}
   
   
    
    
}






?>
