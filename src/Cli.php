<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const ROUNDS_QUANTITY = 3;

function run($gameRule, callable $roundGenerator)
{
    line('Welcome to brain games!');
    line($gameRule);
    $playerName = prompt('May I have your name?');
    line('Hello %s!', $playerName);
    for ($i = 0; $i < ROUNDS_QUANTITY; $i += 1) {
        ['question' => $question, 'answer' => $correctAnswer] = $roundGenerator();
        line('Question: %s', $question);
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
