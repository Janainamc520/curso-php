<div class="titulo">Construtor e Destrutor</div>
<?php
class Pessoa{
    //atributos $nome e $idade
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    {
        echo'Construtor invocado! <br>';
        $this->nome  = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu!';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
$pessoa = new Pessoa('Rebeca',40);
$pessoa->apresentar();
unset($pessoa);

$pessoaB = new Pessoa('Rebeca',40);
$pessoaB->apresentar();
unset($pessoa);   