<?php

    function defineCategoriaAtleta(string $nome, string $idade){
        //Criando array:
        $categorias = [];
        $categorias[] = 'infantil';
        $categorias[] = 'adolescente';
        $categorias[] = 'adulto';
        if(validaNome($nome) && validaIdade($idade)){
            if($idade>= 6 && $idade <= 12 && !isset($_SESSION['mensagem-de-erro'])){
                //Concatenação:
                setarMensagemSucesso("Atleta ".$nome." compete na categoria ".$categorias[0]);
                return null;
            } else if($idade>= 13 && $idade <= 18){
                setarMensagemSucesso("Atleta ".$nome." compete na categoria ".$categorias[1]);
                return null;
            } else if($idade>= 19 && $idade <= 130){
                setarMensagemSucesso("Atleta ".$nome." compete na categoria ".$categorias[2]);
                return null;
            }
        } else {
            return obterMensagemErro();
        }
    }
?>