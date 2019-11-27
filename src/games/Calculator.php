<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Games\Functions\Functions\rand;

function getGameRule()
{
    return "What is the result of the expression?";
}

function game()
{
    $firstNumber = rand(20);
    $secondNumber = rand(20);
    $questions = [
        [
            'question' => "{$firstNumber} + {$secondNumber}",
            'answer' => $firstNumber + $secondNumber
        ],
        [
            'question' => "{$firstNumber} - {$secondNumber}",
            'answer' => $firstNumber - $secondNumber
        ],
        [
            'question' => "{$firstNumber} * {$secondNumber}",
            'answer' => $firstNumber * $secondNumber
        ]
    ];
    $randomKey = array_rand($questions, 1);
    return $questions[$randomKey];
}
