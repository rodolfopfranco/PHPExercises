<?php
function esconde_senha($texto){
    //Obtém o índice do final do regex 'senha:'
    $regex = 'senha:';
    if(!preg_match('/'.$regex.'/',$texto))
        return $texto;
    $posicao_regex = strpos($texto,$regex)+strlen($regex);
    if ($texto[$posicao_regex]==' '){
        $posicao_regex++;
    }
    $continuar = true;
    //Itera a senha até não ser número ou letra:
    for($i = $posicao_regex; $i<strlen($texto) and $continuar==true; $i++){
        $texto[$i]='*';
        $char = ord($texto[$i+1]);
        //Verifica se o caractere não é uma letra seguindo a tabela ASCII ou um número:
        if(!(($char>=65 and $char<=90) or ($char>=97 and $char<=122) or (is_numeric($texto[$i+1])))){
            $continuar = false;
        }
    }
    return $texto;
}
?>
<html>
    <body>
        <form method="post">
            <input type="text" name="texto">
            <input type="submit" name="botao" value="codificar">
            <?php if(isset($_POST['botao'])) echo "<br/>"   .esconde_senha($_POST['texto']); ?>
        </form>
    </body>
</html>