<div class="titulo">Classe Abstrata</div>
<?php
abstract class Abstrata{
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata{
    public function metodo1()
    {
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}

class Croncreta extends FilhaAbstrata{
    public function metodo1()
    {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro)
    {
        echo "Execuntando método 2 ,com parametro $parametro<br>";
    }

    public function metodo3()
    {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}
$c = new Croncreta();
$c->metodo1();
$c->metodo3();
echo "Fim";