<?php
    //Força uma tipagem rígida na recepção de dados:
    declare(strict_types=1);
    //Declaração de função com certo tipo de retorno:
    function validaNome(string $nome) : boolean{
        if(empty($nome)){
            setarMensagemErro('O nome não pode ser vazio');
            return false;
        } else
        if(strlen($nome)<3){
            setarMensagemErro('Nome deve ter mais de 3 caracteres');
            return false;
        } else
        if(strlen($nome)>40){
            setarMensagemErro('Nome muito extenso');
            return false;
        } else {
            setarMensagemErro(NULL);
            return true;
        }
    }

    function validaIdade(string $idade) : boolean{
        if(!is_numeric($idade)){
            setarMensagemErro('A idade precisa ser um número');
            return false;
        } else {
            setarMensagemErro(NULL);
            return true;
        }
    }

?>