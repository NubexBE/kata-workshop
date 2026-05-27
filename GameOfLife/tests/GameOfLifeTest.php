<?php

declare(strict_types=1);

namespace App\Tests;

use App\GameOfLife;
use PHPUnit\Framework\TestCase;

class GameOfLifeTest extends TestCase
{
    public function testEmptyGridStaysEmpty(): void
    {
        $gameOfLife = new GameOfLife();

        $result = $gameOfLife->nextGeneration([
            [false, false, false],
            [false, false, false],
            [false, false, false],
        ]);

        $this->assertSame([
            [false, false, false],
            [false, false, false],
            [false, false, false],
        ], $result);
    }
}
