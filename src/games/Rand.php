<?php

namespace BrainGames\Games\Rand;

function rand($maximumNumber)
{
    return \mt_rand(0, $maximumNumber);
}
