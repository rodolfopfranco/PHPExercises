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

    //Validação das informações:
    if(empty($nome)){
        echo 'O nome não pode ser vazio';
        return;
    }
    if(strlen($nome)<3){
        echo 'Nome deve ter mais de 3 caracteres';
        return;
    }
    if(strlen($nome)>40){
        echo 'Nome muito extenso';
        return;
    }
    if(!is_numeric($idade)){
        echo 'A idade precisa ser um número';
        return;
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