<?php


include_once "prime-generator.php";


if ($argc > 1 && is_numeric($argv[1]))
{
    // Use the limit given on the command line
    $limit = $argv[1];
}
else
{
    // Pick an arbitrary limit by default
    $limit = 150;
}

print('Finding all primes less than '.$limit.":\n\n");
getPrimesLessThan($limit);


?>
