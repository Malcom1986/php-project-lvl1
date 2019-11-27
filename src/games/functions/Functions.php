<?php

namespace BrainGames\Games\Functions\Functions;

function rand($maximumNumber)
{
    return \mt_rand(0, $maximumNumber);
}

function makeProgression($firstMember, $step, $count = 10)
{
    $progression = [];
    for ($i = 0; $i < $count; $i += 1) {
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

function isEven($number)
{
    return $number % 2 === 0;
}
