<?php

$familyJson = file_get_contents('data/family.json');
$family = json_decode($familyJson, true);

$ages = array_map(fn ($member) => $member['age'], $family);

$youngest = min($ages);
$oldest = max($ages);

return [$youngest, $oldest, $oldest - $youngest];
