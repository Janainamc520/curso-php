<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(111 == '111'); //true
var_dump(111 === '111'); //false
var_dump(111 != '111'); //false
var_dump(111 !== '111'); //true

var_dump(1 > 1); //true
var_dump(1 >= 1); //false
var_dump(1 < 1); //false
var_dump(1 <= 1); //true
var_dump(1 != 1); //false

echo "<p> Relacionais no If/Else </p><hr>";
$idade = 66;
if ($idade < 18) {
	echo "Menor de idade<br>";
} elseif ($idade < 65) {
	echo "Adulto<br>";

} else {
	echo "Terceira idade!";
}

echo '<p> spaceship</p><hr>'; //comparação ou ordenação entre numeros.
var_dump(5 <=> 3);
var_dump(5 <=> 5);
var_dump(5 <=> 50);

echo '<p> Valores pode ser verdadeiro ou falso</p><hr>'; //comparação ou ordenação entre numeros.

var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!"");
?>

<style>

	p{
		margin-bottom: -20px;
	}
</style>