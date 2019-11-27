<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Games\Functions\Functions\{isPrime, rand};

function getGameRule()
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no"';
}

function game()
{
    $question = rand(100);
    $answer = isPrime($question) ? 'yes' : 'no';
    return [
        'question' => $question,
        'answer' => $answer
    ];
}
