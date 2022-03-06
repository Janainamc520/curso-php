<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
	<input type="text" name="param">
	<select name="conversao" id="conversao">
		<option value="k-milha">km > Milha</option>
		<option value="milha-km">Milha > Km</option>
		<option value="metro-km">Metros > Km</option>
		<option value="km-metro">Km > Metros</option>
	</select>
	<button>Calcular</button>
	<!--<input type="submit" value="converter">-->
</form>
<input class="search-global-typeahead__input always-show-placeholder" placeholder="Pesquisar" role="combobox" aria-autocomplete="list" aria-label="Pesquisar" aria-activedescendant="" aria-expanded="false" type="text">
<?php

const FATRO_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
case 'Km-milha':
	$distancia = $param * FATRO_KM_MILHA;
	$mensagem = "$param km = $distancia Milhas";
	break;
case 'milha-km':
	$distancia = $param / FATRO_KM_MILHA;
	$mensagem = "$param Milhas = $distancia Km";
	break;
case 'metro-km':
	$distancia = $param / FATOR_METRO_KM;
	$mensagem = "$param metros = $distancia km";
	break;
case 'Km-metro':
	$distancia = $param * FATOR_METRO_KM;
	$mensagem = "$param km = $distancia Metros";
	break;
default:
	$mensagem = "Nenhum valor calculado";
}
echo "<p>$mensagem</p"

?>