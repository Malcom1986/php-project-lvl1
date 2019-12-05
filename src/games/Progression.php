<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\run;

const GAME_RULE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function makeProgression($firstMember, $step, $progressionLength)
{
    $progression = [];
    for ($i = 0; $i < $progressionLength; $i += 1) {
        $progression[] = $firstMember + $step * $i;
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

function runGame()
{
    $roundGenerator = function () {
        $progressionFirstMember = mt_rand(0, 9);
        $progressionStep = mt_rand(0, 9);
        $progression = makeProgression($progressionFirstMember, $progressionStep, PROGRESSION_LENGTH);
        $hiddenElementKey = mt_rand(0, PROGRESSION_LENGTH - 1);
        $answer = $progression[$hiddenElementKey];
        $question = implode('  ', hideElement($progression, $hiddenElementKey));
        return [
            'question' => $question,
            'answer' => $answer
        ];
    };
    
    run(GAME_RULE, $roundGenerator);
}
