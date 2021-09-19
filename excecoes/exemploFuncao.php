<?php

function validarUsuario(array $usuario){
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
        throw new Exception("Campos obrigatórios não preenchidos!");
    }
    return true;
}

$usuario = [
    'codigo' =>1,
    'nome' =>'',
    'idade' => 57,
];

//Bloco trycatch:
try{
    $usuarioValido = validarUsuario($usuario);
} catch (Exception $e){
    echo $e->getMessage();
}

echo "\n... executando ...\n";