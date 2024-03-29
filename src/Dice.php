<?php

declare(strict_types=1);

namespace Olelishna\Diceroller;

use Exception;

class Dice
{
    public static function roll(int $faces_count = null): int
    {
        if ($faces_count === null || $faces_count === 0) {
            return 1; // critical fumble
        }

        try {
            $result = random_int(1, $faces_count);
        } catch (Exception $e) {
            $result = 1; // critical fumble
        }

        return $result;
    }
}