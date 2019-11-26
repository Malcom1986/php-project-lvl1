<?php

namespace BrainGames\Games\Even;

function getGameRule()
{
    return 'Answer "yes" if the number is even, otherwise answer "no"';
}

function generateNumber()
{
    return \mt_rand(0, 100);
}

function isEven($number)
{
    return $number % 2 === 0;
}

function game()
{
    $question = generateNumber();
    $answer = isEven($question) ? 'yes' : 'no';
    return [
        'question' => $question,
        'answer' => $answer
    ];
}
