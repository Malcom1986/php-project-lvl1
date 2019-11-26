<?php

namespace BrainGames\Games\Gcd;

function getGameRule()
{
    return "Find the greatest common divisor of given numbers.";
}

function generateNumber()
{
    return \mt_rand(0, 100);
}

function gcd($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    }
    return gcd($num2, $num1 % $num2);
}

function game()
{
    $firstNumber = generateNumber();
    $secondNumber = generateNumber();
    $gcd = gcd($firstNumber, $secondNumber);
    return [
        "question" => "{$firstNumber}  {$secondNumber}",
        "answer" => $gcd
    ];
}
