<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Games\Rand\rand;
use function BrainGames\Cli\run;

const GAME_RULE = 'What number is missing in the progression?';

function makeProgression($firstMember, $step, $progressionLength)
{
    $progression = [];
    for ($i = 0; $i < $progressionLength; $i += 1) {
        $progressionMember = $firstMember + $step * $i;
        $progression[] = $progressionMember;
    }
    return $progression;
}

function hideElement($collection, $key)
{
    if (!array_key_exists($key, $collection)) {
        return $collection;
    }
    $newCollection = $collection;
    $newCollection[$key] = '..';
    return $newCollection;
}

function game()
{
    $progressionLength = 10;
    $progression = makeProgression(rand(9), rand(9), $progressionLength);
    $randomKey = rand($progressionLength - 1);
    $answer = $progression[$randomKey];
    $question = implode('  ', hideElement($progression, $randomKey));
    return [
        'question' => $question,
        'answer' => $answer
    ];
}

function runGame()
{
    run('Progression');
}
