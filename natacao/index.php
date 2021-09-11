<?php
    session_start();
?>

<!DOCTYPE html>
<!--//Criar um formulário para que o usuário possa preencher nome e idade dos competidores.
//Exibirá então a categoria da pessoa-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário de inscrição</title>
        <meta name="author" content="">
        <meta name="description" content"">
        <meta name="viewport" content="width-device-width, initial scale=1">
    </head>

    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="verifica_idade.php" method="post">
            <?php
                $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
                if(!empty($mensagemDeErro)){
                    echo $mensagemDeErro;
                }
            ?>
            <p>Nome: <input type="text" name="nome" /> </p>
            <p>Idade: <input type="text" name="idade" /> </p>
            <p><input type="submit" /></p>
            <?php
                $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
                if(!empty($mensagemDeSucesso)){
                    echo $mensagemDeSucesso;
                }
            ?>
        </form>

    </body>
</html>