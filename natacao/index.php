<?php
    //Criando array:
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    //Imprime objetos:
    print_r($categorias);

    $nome = 'Alex';
    $idade = 20;
    //Obtém informações da variável:
    var_dump($nome);
    var_dump($idade);
    echo '<br />';
    if($idade>= 6 && $idade <= 12){
        //Concatenação:
        echo"Atleta ".$nome." compete na categoria ".$categorias[0];
    } else if($idade>= 13 && $idade <= 18){
        echo"Atleta ".$nome." compete na categoria ".$categorias[1];
    } else {
        echo"Atleta ".$nome." compete na categoria ".$categorias[2];
    }
?>