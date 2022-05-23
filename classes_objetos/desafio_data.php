<div class="titulo">Desafio Classe Data</div>
<?php
class Data{
    //atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "{$this->dia}/{$this->mes}
        /{$this->ano}<br>";
    }
}
$dat = new Data();
$dat->apresentar();

$dat1 = new Data();
$dat1->dia = 02;
$dat1->mes = 11;
$dat1->ano = 1981;
$dat1->apresentar();
