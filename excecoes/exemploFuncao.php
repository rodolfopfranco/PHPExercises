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

$usuarioValido = validarUsuario($usuario);

echo "\n... executando ...\n";