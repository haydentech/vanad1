<?php


function getPrimesLessThan($limit)
{
    // Initialize the sieve with 2 and all subsequent odd values
    $sieve[2] = true;
    for ($i = 3; $i < $limit; $i += 2)
    {
        $sieve[$i] = true;
    } 

    $candidate = 3;
    while ($candidate * $candidate < $limit)
    {      
        if (isset($sieve[$candidate]))
        {
            // This is a prime, so remove multiples of it
            $multiple = $candidate * $candidate;
            while ($multiple < $limit)
            {
                unset($sieve[$multiple]);
                $multiple += $candidate;
            }
        }
        
        $candidate += 2;
    }
    
    foreach(array_keys($sieve) as $index => $prime)
    {
        print(($index + 1).'. '.$prime."\n");
    }
}


?>
