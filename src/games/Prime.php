<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Cli\run;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no"';

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $roundGenerator = function () {
        $question = mt_rand(0, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [
            'question' => $question,
            'answer' => $answer
        ];
    };

    run(GAME_RULE, $roundGenerator);
}
