<div class="titulo">Usando Tipos</div>

<?php 

function somar1($a, $b) {
   echo "<span>Somando $a + $b = </span>";
   return $a + $b;
}
echo somar1(1, 2) . '<br>';