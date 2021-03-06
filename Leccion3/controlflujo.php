<?php

function divide($i)
{
    if ($i == 0) {
        throw new \Exception('Division por 0\n');
    } else {
        return 10 / $i;
    }
}

$array = [];
for ($i = 0; $i < 10; ++$i) {
    $array['clave'.$i] = $i;
}
foreach ($array as  $clave => $valor) {
    echo "$clave => $valor\n";
    echo '$clave => $valor\n';

    switch ($valor) {
        case 1: echo $valor."\n"; break;
        case 2: continue;
        case 3:
        case 4:
        case 5:
        case 6:
        default: echo $valor."\n"; break;
    }
}
$i = 10;
while ($i < 10) {
    echo $i."\n";
}
do {
    echo $i."\n";
} while ($i < 10);

try {
    divide(0);
    echo "Se puede dividir por 0\n";
} catch (\Exception $e) {
    echo "Capturando excepción de division por 0\n";
    echo $e->getMessage()."\n";
} finally {
    echo "Acabamos\n";
}
