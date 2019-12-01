<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run($gameName)
{
    line('Welcome to brain games!');
    $importFrom = "\\BrainGames\\Games\\{$gameName}\\";
    $gameRule = constant($importFrom . 'GAME_RULE');
    line($gameRule);
    $playerName = prompt('May I have your name?');
    line('Hello %s!', $playerName);
    $game = $importFrom . 'game';
    for ($round = 1; $round <= 3; $round += 1) {
        ['question' => $question, 'answer' => $correctAnswer] = $game();
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
