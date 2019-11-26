<?php

namespace BrainGames\Games\Calculator;

function getGameRule()
{
    return "What is the result of the expression?";
}

function generateNumber()
{
    return \mt_rand(0, 20);
}

function generateQuestion($num1, $num2)
{
    $questions = [
        [
            'question' => "{$num1} + {$num2}",
            'answer' => $num1 + $num2
        ],
        [
            'question' => "{$num1} - {$num2}",
            'answer' => $num1 - $num2
        ],
        [
            'question' => "{$num1} * {$num2}",
            'answer' => $num1 * $num2
        ]
    ];
    $randomKey = array_rand($questions, 1);
    return $questions[$randomKey];
}

function game()
{

    $firstNumber = generateNumber();
    $secondNumber = generateNumber();
    return generateQuestion($firstNumber, $secondNumber);
}
