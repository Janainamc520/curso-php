<div class="titulo">Membros Estáticos</div>

<?php
class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';
    
    public function mostrarA()
    {
        echo "Não Estática = {$this->naoStatic}<br>";
        //Tentaiva 1
        //echo "Estática = {$this->static}<br>";
;       //Tentativa 2
        //echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
    
    public function mostrarStaticA()
    {
        echo "Estática = " . self::$static . "<br>";
        //echo "Não estática = {$static}<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();//Não é a forma ideal

echo '<br>';
echo A::$static,'<br>';//acessa diretamente pela
