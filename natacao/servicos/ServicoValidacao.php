<?php
    //Força uma tipagem rígida na recepção de dados:
    declare(strict_types=1);
    //Declaração de função com certo tipo de retorno:
    function validaNome(string $nome) : boolean{
        if(empty($nome)){
            $_SESSION['mensagem-de-erro']='O nome não pode ser vazio';
            return false;
        } else
        if(strlen($nome)<3){
            $_SESSION['mensagem-de-erro']='Nome deve ter mais de 3 caracteres';
            return false;
        } else
        if(strlen($nome)>40){
            $_SESSION['mensagem-de-erro']='Nome muito extenso';
            return false;
        } else {
            $_SESSION['mensagem-de-erro']=NULL;
            return true;
        }
    }

    function validaIdade(string $idade) : boolean{
        if(!is_numeric($idade)){
            $_SESSION['mensagem-de-erro']='A idade precisa ser um número';
            return false;
        } else {
            $_SESSION['mensagem-de-erro']=NULL;
            return true;
        }
    }

    function limpaMensagemDeSucesso(){
        if(isset($_SESSION['mensagem-de-erro'])){
            $_SESSION['mensagem-de-sucesso'] = NULL;
            header('location:index.php');
        }
    }
?>