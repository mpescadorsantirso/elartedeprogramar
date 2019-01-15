<?php

function recursiva($valor)
{
    echo $valor;
    --$valor;
    if ($valor == 0) {
        return;
    }
    recursiva($valor);
}

recursiva(10);
