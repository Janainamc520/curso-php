<div class="titulo">Argumentos & Retorno</div>

<?php 
    function obterMensagem(){
        return 'Seja bem vindo(a)!';
    }
    obterMensagem();
    $mensagem = obterMensagem();
    echo $mensagem;
    echo '<br>', obterMensagem();
    echo'<br>';
    var_dump(obterMensagem());
    echo '<br>';

    function obterMensagemComNome($nome){
        return "Bem Vindo, {$nome}";
    }
    echo '<br>', obterMensagemComNome('Enya');
    echo '<br>', obterMensagemComNome('Benjamin');
    echo '<br>';

    function soma($a, $b) {
        return $a + $b;
    }
   echo '<br>', soma(4, 10);
   echo '<br>', soma(4, 50);

   echo '<br>';

   
