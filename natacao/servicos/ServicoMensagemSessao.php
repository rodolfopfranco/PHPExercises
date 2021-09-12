<?php
    session_start();
    function setarMensagemErro(string $mensagem):void{
        $_SESSION['mensagem-de-erro'] = $mensagem;
    }

    function obterMensagemErro(): string{
        if(isset($_SESSION['mensagem-de-erro']))
            return $_SESSION['mensagem-de-erro'];
        return '';
    }

    function setarMensagemSucesso(string $mensagem):void{
        $_SESSION['mensagem-de-sucesso'] = $mensagem;
    }

    function obterMensagemSucesso(): string{
        if(isset($_SESSION['mensagem-de-sucesso']))
            return $_SESSION['mensagem-de-sucesso'];
        return '';
    }

    function removerMensagemErro(){
        if(isset($_SESSION['mensagem-de-erro']))
            unset($_SESSION['mensagem-de-erro']);
    }

    function removerMensagemSucesso(){
        if(isset($_SESSION['mensagem-de-sucesso']))
            unset($_SESSION['mensagem-de-sucesso']);        
    }
?>