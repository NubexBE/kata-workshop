<?php

declare(strict_types=1);

namespace Tests\Bowling;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testRoll(): void
	{
		$game = new Game();
		$game->roll(1);
		$this->assertEquals();
	}
}
