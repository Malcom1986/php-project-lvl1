<?php

namespace BrainGames\Games\Calculator;

use function cli\line;
use function cli\prompt;

function generateAction($num1, $num2)
{
    $actions = [
        ['action' => '+', 'result' => $num1 + $num2],
        ['action' => '-', 'result' => $num1 - $num2],
        ['action' => '*', 'result' => $num1 * $num2]
    ];
    $randomKey = array_rand($actions);
    return $actions[$randomKey];
}

function generateNumber()
{
    return \mt_rand(0, 20);
}

function game($playerName)
{
    for ($round = 1; $round <= 3; $round += 1) {
        $firstNumber = generateNumber();
        $secondNumber = generateNumber();
        $action = generateAction($firstNumber, $secondNumber);
        $token = $action['action'];
        $correctAnswer = $action['result'];
        line('Question: %s', "{$firstNumber} {$token} {$secondNumber}");
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again %s", $playerName);
            return;
        }
    }
    line("Congratulations, %s!", $playerName);
    return;
}
