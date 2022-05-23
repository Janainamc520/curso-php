<div class="titulo">Laço For</div>
<?php 
for($cont= 1; $cont <= 5; $cont++){
	echo "$cont <br>";
}

for(; $cont <=10; $cont++){
	echo "$cont <br>";
}

$array = ['Segunda', 'terça','quarta','quinta','sexta','sabado','domingo'];

print_r($array);
echo "<hr>";

for($i = 0; $i < count($array); $i++){
	echo"{$array[$i]} <br>";

}





 ?>