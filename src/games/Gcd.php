<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Games\Functions\Functions\{rand, gcd};

function getGameRule()
{
    return "Find the greatest common divisor of given numbers.";
}

function game()
{
    $firstNumber = rand(100);
    $secondNumber = rand(100);
    $gcd = gcd($firstNumber, $secondNumber);
    return [
        "question" => "{$firstNumber}  {$secondNumber}",
        "answer" => $gcd
    ];
}
