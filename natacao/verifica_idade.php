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

    //Validação das informações:
    if(empty($nome)){
        $_SESSION['mensagem-de-erro']='O nome não pode ser vazio';
    } else
    if(strlen($nome)<3){
        $_SESSION['mensagem-de-erro']='Nome deve ter mais de 3 caracteres';
    } else
    if(strlen($nome)>40){
        $_SESSION['mensagem-de-erro']='Nome muito extenso';
    } else
    if(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro']='A idade precisa ser um número';
    } else {
        $_SESSION['mensagem-de-erro']=NULL;
    }
    if(isset($_SESSION['mensagem-de-erro'])){
        $_SESSION['mensagem-de-sucesso'] = NULL;
        header('location:index.php');
    }

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