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
        header('location:index.php');
    }
    if(strlen($nome)<3){
        $_SESSION['mensagem-de-erro']='Nome deve ter mais de 3 caracteres';
        header('location:index.php');
    }
    if(strlen($nome)>40){
        $_SESSION['mensagem-de-erro']='Nome muito extenso';
        header('location:index.php');
    }
    if(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro']='A idade precisa ser um número';
        header('location:index.php');
    }


//Prints:
    if($idade>= 6 && $idade <= 12){
        //Concatenação:
        echo"Atleta ".$nome." compete na categoria ".$categorias[0];
    } else if($idade>= 13 && $idade <= 18){
        echo"Atleta ".$nome." compete na categoria ".$categorias[1];
    } else {
        echo"Atleta ".$nome." compete na categoria ".$categorias[2];
    }
?>