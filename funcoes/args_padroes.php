<div class="titulo">Argumentos & Padrão</div>

<?php 

function saudacao($nome = 'Senhor(a)',$sobrenome = 'Cliente'){
   return "Bem vindo, $nome $sobrenome!<br>";
}
echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL,NULL);
echo saudacao('Mestre','Supremo');