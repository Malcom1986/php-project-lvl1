<?php

namespace BrainGames\Games\Even;

use function BrainGames\Games\Functions\Functions\{rand, isEven};

function getGameRule()
{
    return 'Answer "yes" if the number is even, otherwise answer "no"';
}

function game()
{
    $question = rand(100);
    $answer = isEven($question) ? 'yes' : 'no';
    return [
        'question' => $question,
        'answer' => $answer
    ];
}
