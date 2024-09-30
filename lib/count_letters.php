<?php

$dataJson = file_get_contents('data/letters.json');
$arrays = json_decode($dataJson, true);

function freq_array($freq, $array)
{
    return array_reduce($array, freq_element(...), $freq);
}

function freq_element($freq, $element)
{
    $freq[$element] = 1 + ($freq[$element] ?? 0);
    return $freq;
}

return array_reduce($arrays, freq_array(...), []);
