<?php

//função date:
echo date('d/m/y')."<br />";

//Classe dateTime:
$data = new DateTime();
echo "este é o DateTime: ".$data->format('d-m-y')."<br />";
echo "Pegando horário: ".$data->format('H:i:s');

//Manipulando data com DateInterval e DateTime:
/*
P período
    Y anos
    M meses
    D dias
    W semanas
T tempo
    H
    M
    S
*/
$dataManipulada = new DateTime();
//Período 0
//Tempo 5 minutos:
$intervalo = new DateInterval('PT5M');
$dataManipulada->add($intervalo);
var_dump($dataManipulada);
//Removendo tempo:
//Tirando 5 anos, 10 meses, 5 dias, 10 horas, 5 minutos e 2 segundos:
$intervalo = new DateInterval('P5Y10M5DT10H5M2S');
$dataManipulada->sub($intervalo);
var_dump($dataManipulada);

?>