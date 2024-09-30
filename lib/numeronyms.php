<?php

define('INPUT', 'Every developer likes to mix kubernetes and javascript');

$words = preg_split('/\s+/', INPUT, -1, PREG_SPLIT_NO_EMPTY);

function nymeronym($word)
{
    $len = strlen($word);
    return match ($len) {
        0, 1, 2, 3 => $word,
        default => $word[0] . ($len - 2) . $word[$len - 1]
    };
}

$nymeronyms = array_map(nymeronym(...), $words);

return implode(' ', $nymeronyms);
