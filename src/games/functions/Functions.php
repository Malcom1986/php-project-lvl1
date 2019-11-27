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

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function gcd($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    }
    return gcd($num2, $num1 % $num2);
}
