<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Games\Rand\rand;
use function BrainGames\Cli\run;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function gcd($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    }
    return gcd($num2, $num1 % $num2);
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

function runGame()
{
    run('Gcd');
}
