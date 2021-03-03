
<?php 
class Dono {
    public $nome;
    public $cpf;
    public $idade;
    public $telefone;
    
    
    public function __construct($n,$c,$i,$telefone) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        $this->telefone =$telefone;

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
    public function getTelefone()

	{
		return $this->telefone;
	}
    public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}

    function modificarNum($telefone)
	{
		$this->telefone = $telefone;
	}

    function resumir()
	{
		
        echo "O dono da empresa é $this->nome, com a idade de $this->idade anos e é portador do Número de CPF: $this->cpf e número de celular: $this->telefone ";
	}
   
   
    
    
}






?>
