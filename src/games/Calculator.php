<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Cli\run;

const GAME_RULE = 'What is the result of the expression?';

function runGame()
{
    $roundGenerator =  function () {
        $questionPart1 = mt_rand(0, 20);
        $questionPart2 = mt_rand(0, 20);
        $questionsAndAnswers = [
            [
                'question' => "{$questionPart1} + {$questionPart2}",
                'answer' => $questionPart1 + $questionPart2
            ],
            [
                'question' => "{$questionPart1} - {$questionPart2}",
                'answer' => $questionPart1 - $questionPart2
            ],
            [
                'question' => "{$questionPart1} * {$questionPart2}",
                'answer' => $questionPart1 * $questionPart2
            ]
        ];
        $randomKey = array_rand($questionsAndAnswers);
        return $questionsAndAnswers[$randomKey];
    };

    run(GAME_RULE, $roundGenerator);
}
