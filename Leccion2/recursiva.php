<?php

function recursiva($valor)
{
    echo $valor;
    --$valor;
    if (0 == $valor) {
        return;
    }
    recursiva($valor);
}

recursiva(10);
