<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\run;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function gcd($num1, $num2)
{
    if ($num2 === 0) {
        return $num1;
    }
    return gcd($num2, $num1 % $num2);
}

function runGame()
{
    $roundGenerator = function () {
        $questionPart1 = mt_rand(0, 100);
        $questionPart2 = mt_rand(0, 100);
        $answer = gcd($questionPart1, $questionPart2);
        return [
            "question" => "{$questionPart1}  {$questionPart2}",
            "answer" => $answer
        ];
    };

    run(GAME_RULE, $roundGenerator);
}
