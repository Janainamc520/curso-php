<div class="titulo">Operadores lógicos</div>
<?php

echo "<p> V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p><strong> Tabela verdade 'AND' (E)</strong></p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<p> <strong>Tabela verdade 'OR' (OU)</strong></p><hr>";
var_dump(true || true);

echo "<p> <strong>Tabela verdade 'XOR' (OU Exclusivo)</strong></p><hr>";
var_dump(true XOR true);

?>

<style >

p{
	margin-bottom: 0px;

}
hr{
	margin-top: 0px;
}

</style>