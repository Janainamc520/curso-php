<div class="titulo">Contantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
// Constantes não se usa $ antes da variavél.

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . PHP_VERSION;
echo '<br>' . __FILE__;
echo '<br>' . __LINE__;
echo '<br>' . __DIR__;

?>