<?php

$familyJson = file_get_contents('data/family.json');
$family = json_decode($familyJson, true);

usort($family, fn ($x, $y) => $x['age'] <=> $y['age']);

$youngest = $family[0];
$oldest = $family[count($family) - 1];

return [$youngest['age'], $oldest['age'], $oldest['age'] - $youngest['age']];
