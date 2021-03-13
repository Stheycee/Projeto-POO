<?php 
class Dados{
    public $nome;
    public $cpf;
    public $idade;
    
    
    
    public function __construct($n,$c,$i) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        

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

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($i) {
        $this->idade == $i;
    
    }
    function resumir()
	{
		
        echo "O dono da empresa é $this->nome, com a idade de $this->idade anos e é portador do Número de CPF: $this->cpf e número de celular: $this->telefone ";
	}

   
    
    
}






?>