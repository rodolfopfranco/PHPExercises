<?php

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
    echo '<br /><br />Resultado:<br/>';

    if($idade>= 6 && $idade <= 12){
        //Concatenação:
        echo"Atleta ".$nome." compete na categoria ".$categorias[0];
    } else if($idade>= 13 && $idade <= 18){
        echo"Atleta ".$nome." compete na categoria ".$categorias[1];
    } else {
        echo"Atleta ".$nome." compete na categoria ".$categorias[2];
    }
?>