<?php

define('N', 6);

return array_reduce(range(1, N), fn ($fact, $n) => $fact * $n, 1);
