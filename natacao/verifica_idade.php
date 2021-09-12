<?php

    include "servicos/ServicoMensagemSessao.php";
    include "servicos/ServicoCategoriaCompetidor.php";
    include "servicos/ServicoValidacao.php";
    session_start();

    //Obtendo informações do post:
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "Obtém informações da variável:<br/>";
    //Imprime objetos:
    print_r($categorias);
    var_dump($nome);
    var_dump($idade);

    defineCategoriaAtleta($nome,$idade);
    header('location: index.php');

?>