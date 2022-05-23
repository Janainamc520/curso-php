<div class="titulo">Argumentos & Variáveis</div>

<?php 
function soma($a, $b){
    return $a + $b;
} 
echo soma(4, 5). '<br>';
echo '<br>';
function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);
echo '<br>';

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

function menbros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach($dependentes as $dep){
            echo "Dependetes: $dep <br>";
        }
    }
}

echo '<br>';
menbros("Ana Silva","Pedro","Rafaela","Amanda");
