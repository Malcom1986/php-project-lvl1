<?php

namespace BrainGames\Games\Even;

use function BrainGames\Cli\run;

const GAME_RULE = 'Answer "yes" if the number is even, otherwise answer "no"';

function isEven($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    $roundGenerator = function () {
        $question = mt_rand(0, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [
            'question' => $question,
            'answer' => $answer
        ];
    };
    
    run(GAME_RULE, $roundGenerator);
}
