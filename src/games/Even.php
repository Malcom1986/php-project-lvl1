<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function generateNumber()
{
    return \mt_rand(0, 100);
}

function isEven($number)
{
    return $number % 2 == 0;
}

function run()
{
    line('Welcome to brain games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line('Hello %s!', $name);
    for ($i = 0; $i < 3; $i += 1) {
        $number = generateNumber();
        line('Question: %s', $number);
        $answer = prompt('Your answer');
        $correctAnswer = isEven($number) ? 'yes' : 'no';
        if ($answer != $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again %s", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
    return;
}
