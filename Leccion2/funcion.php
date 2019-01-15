<?php

function procedimiento()
{
    echo "procedimiento\n";
}
function funcion($valor = null)
{
    return 1;
}
function valor($valor)
{
    $valor = $valor." pasado por valor\n";
    echo $valor;
}
function referencia(&$referencia)
{
    $referencia = $referencia." pasado por referencia\n";
    echo $referencia;
}

echo funcion();
procedimiento();
$valor = 'valor';
echo $valor;
valor($valor);
echo $valor;
referencia($valor);
echo $valor;
