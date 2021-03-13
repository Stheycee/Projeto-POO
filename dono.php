
<?php 
require_once "classemae.php";
require_once "menu.php";
class Dono extends Dados{
    public $telefone;
    
    
    public function __construct($n,$c,$i,$telefone) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->idade = $i;
        $this->telefone =$telefone;

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

    
   
   
    
    
}

echo '<br />';
echo '<br />';
$p1 = new Dono ("João","111.111.111-11","28","98888-8888");
$p1->resumir();
echo '<hr />';




?>
