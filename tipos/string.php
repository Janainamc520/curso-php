<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string!';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação
echo "Nós também" . ' somos', '<br>';
echo "Também aceito", " virgulas";

print("<br> Também existe a função print");
print "<br> Também existe a função print";

// Algumas funções

echo '<br>' . strtoupper('maximizado');

echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra.');
echo '<br>' . ucwords('todas as palavras.');
echo '<br>' . strlen('todas as palavras.');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // Parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');
echo '<br>' . strpos('!AbcaBcabc', 'abc');
echo '<br>' . stripos('!AbcaBcabc', 'abc');
?>