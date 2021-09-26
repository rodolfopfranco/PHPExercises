<?php
//QUESTÃO A:
//Criando vetor:
$vetor = array('Maria', 'João', 'José', 'Ano', 'Antônio', 'Joana');
$grafo = cria_grafo($vetor, 0.5);
imprimeGrafo($grafo);
//QUESTÃO B:
echo"Após a adição:<br/>";
$vetor2 = array('Arno', 'Ezio');
$grafo = atualiza_matriz($vetor2, $grafo, 0.5);
imprimeGrafo($grafo);

function cria_grafo($vetor, $probabilidade){
    //Vê o número de itens para gerar a matriz:
    $items = count($vetor);
    $grafoCriado = Array();
    //Gera a matriz:
    for ($i=0;$i<$items;$i++){
        $linha = Array();
        for ($j=0;$j<$items;$j++){
            //Verifica se está dentro da probabilidade e cria a aresta:
            if (simOuNao($probabilidade)){
                $linha[] = 1;
            } else {
                $linha[] = 0;
            }
        }
        $grafoCriado[]= $linha;
    }
    return $grafoCriado;
}

function atualiza_matriz($vetorVerticesNovos, $matriz, $probabilidade){
    
    //Vê o número de itens para gerar adicionar à matriz:
    $items = count($vetorVerticesNovos);
    
    //Adiciona as colunas de acordo com os vértices novos:
    $itemsColuna = count($matriz);
    for ($i=0;$i<$itemsColuna;$i++){
        $itemsMatriz = count($matriz[$i]);
        //Repete a adição de acordo com a quantidade de itens novos:
        for ($j=$itemsMatriz;$j<$itemsMatriz+$items;$j++){
            //Verifica se está dentro da probabilidade e cria a aresta:
            if (simOuNao($probabilidade)){
                $matriz[$i][] = 1;
            } else {
                $matriz[$i][] = 0; 
            }
        }
    }

    //Repete, mas para incluir as linhas no final:
    $colunas = count($matriz[0]);
    for ($i=0;$i<$items;$i++){
        $linha = Array();
        for ($j=0;$j<$colunas;$j++){
            if (simOuNao($probabilidade)){
                $linha[] = 1;
            } else {
                $linha[] = 0;
            }
        }
        $matriz[]= $linha;
    }

    return $matriz;
}

function simOuNao($probabilidade){
    //conta as casas decimais para gerar a semente certa:
    $casasDecimais = strpos(strrev($probabilidade), ".");
    $sementeAleatoria = pow(10,$casasDecimais);
    //Cria o número aleatório:
    $aleatorio = rand(0,$sementeAleatoria)/$sementeAleatoria;
    //Verifica se está dentro da probabilidade:
    if($aleatorio<=$probabilidade){
        return true;
    }
    return false;
}

function imprimeGrafo($matriz){
    foreach($matriz as $linha){
        echo "|";
        foreach($linha as $aresta){
            echo $aresta."|";
        }
        echo "<br/>";
    }
}

?>