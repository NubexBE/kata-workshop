<?php

declare(strict_types=1);

namespace Tests\Bowling;

use Bowling\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
	public function testFrames(): void
	{
		$game = new Game();
		$frame = $game->totalFrames;
		$this->assertEquals(10, $frame);
	}

	public function testPins(): void
	{
		$game = new Game();
		$pins = $game->totalPins;
		$this->assertEquals(10, $pins);
	}
	public function testRemainingRolls(): void
	{
		$game = new Game();
		$rolls = $game->remainingRolls;
		$this->assertEquals(2, $rolls);
	}



}
