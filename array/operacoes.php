<div class="titulo"> Operações</div>
<?php
$dados1 =[
   "nome" => "Jose",
   "idade" => 28
];

$dados2 = [
   "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
echo '<br>' . is_array($dadosCompletos);//verifica se é um array
echo '<br>' . count($dadosCompletos);//conta quantos dados
 
 
?>
 

