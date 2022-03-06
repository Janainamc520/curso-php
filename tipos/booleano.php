<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . is_bool(false), '<br>';
echo '<br>' . var_dump((bool) 0); // Apenas zero é false

?>