<?php

declare(strict_types=1);

require_once __DIR__."/vendor/autoload.php";

$roll = olelishna\diceroller\DiceRoller::roll(20);

echo $roll;