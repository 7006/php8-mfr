<?php

$lettersJson = file_get_contents('data/letters.json');
$letters = json_decode($lettersJson, true);

$freq = [];

$fn = function ($letter, $_) use (& $freq) {
    if (isset($freq[$letter])) {
        $freq[$letter] += 1;
    } else {
        $freq[$letter] = 1;
    }
};

array_walk_recursive($letters, $fn);

return $freq;
