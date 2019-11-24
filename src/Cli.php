<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function  BrainGames\Games\Even\evenGame;

function run($gameRule)
{
    line('Welcome to brain games!');
    line($gameRule);
    $playerName = prompt('May I have your name?');
    line('Hello %s!', $playerName);
    evenGame($playerName);
}
