<div class="titulo">Desafio Classe Data</div>
<?php
class Data{
    //atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "{$this->dia}/{$this->mes}Não,pergu/{$this->ano}<br>";
    }
}
$dat = new Data();
$dat->apresentar();