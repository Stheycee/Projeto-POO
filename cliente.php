<?php 
class Cliente {
    public $nome;
    public $cpf;
    public $idade;
    public $profissão;
    public $renda;
    
    
    public function __construct($n,$c,$i,$p,$r) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        $this->profissão = $p;
        $this->renda = $r;

    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome == $n;
    }

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($c) {
        $this->cpf == $c;
    }

    public function getProfissão() {
        return $this->profissão;
    }
    public function setProfissão($p) {
        $this->profissão == $p;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($i) {
        $this->idade == $i;
    }
    public function getRenda() {
        return $this->renda;
    }
    public function setRenda($r) {
        $this->renda == $r;
    }

    function desconto ()
    {
        if ($this->renda>= 1500) {
            echo "<p>Como a renda é maior que 1500 damos o direito a uma manutenção gratis, data a combinar.</p>";
        }
    }
    
    function resumir()
	{
		
        echo "$this->nome, com a idade de $this->idade anos e é portador do Número de CPF: $this->cpf. Profissão:$this->profissão e Renda: $this->renda. ";
        $this->desconto();
	}
   
   
    
    
}






?>