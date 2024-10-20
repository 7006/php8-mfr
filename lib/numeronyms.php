<?php

define('INPUT', 'Every developer likes to mix kubernetes and javascript');

$words = preg_split('/\s+/', INPUT, -1, PREG_SPLIT_NO_EMPTY);

function numeronym($word)
{
    $len = strlen($word),
    return $len < 4
        ? $word
        : $word[0] . ($len - 2) . $word[$len - 1];
}

$numeronyms = array_map(numeronym(...), $words);

return implode(' ', $numeronyms);
