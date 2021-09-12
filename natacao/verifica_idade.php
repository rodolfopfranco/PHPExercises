<?php

    session_start();

    //Criando array:
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    //Obtendo informações do post:
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "Obtém informações da variável:<br/>";
    //Imprime objetos:
    print_r($categorias);
    var_dump($nome);
    var_dump($idade);

    if($idade>= 6 && $idade <= 12 && !isset($_SESSION['mensagem-de-erro'])){
        //Concatenação:
        $_SESSION['mensagem-de-sucesso'] = "Atleta ".$nome." compete na categoria ".$categorias[0];
        header('location:index.php');
    } else if($idade>= 13 && $idade <= 18){
        $_SESSION['mensagem-de-sucesso'] = "Atleta ".$nome." compete na categoria ".$categorias[1];
        header('location:index.php');
    } else if($idade>= 19 && $idade <= 130){
        $_SESSION['mensagem-de-sucesso'] = "Atleta ".$nome." compete na categoria ".$categorias[2];
        header('location:index.php');
    }
?>