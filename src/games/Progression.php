<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Games\Functions\Functions\{rand, makeProgression, hideElement};

function getGameRule()
{
    return "What number is missing in the progression?";
}

function game()
{
    $progression = makeProgression(rand(10), rand(10));
    $randomKey = rand(9);
    $answer = $progression[$randomKey];
    $question = implode('  ', hideElement($progression, $randomKey));
    return [
        'question' => $question,
        'answer' => $answer
    ];
}
