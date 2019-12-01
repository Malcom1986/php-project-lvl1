<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Games\Rand\rand;
use function BrainGames\Cli\run;

const GAME_RULE = 'What is the result of the expression?';

function game()
{
    $firstNumber = rand(20);
    $secondNumber = rand(20);
    $questionsAndAnswers = [
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
    $randomKey = array_rand($questionsAndAnswers, 1);
    return $questionsAndAnswers[$randomKey];
}

function runGame()
{
    run('Calculator');
}
