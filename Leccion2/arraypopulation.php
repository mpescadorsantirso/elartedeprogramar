<?php

$array = array();
for ($i = 1; $i < 10; ++$i) {
    for ($j = 'a'; $j != 'h'; ++$j) {
        $array[$j.$i] = array($j => $i);
    }
}
echo print_r($array, true);
echo json_encode($array, true);
