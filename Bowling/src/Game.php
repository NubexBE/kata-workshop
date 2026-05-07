<?php

namespace Bowling;

class Game {
    const int totalFrames = 10;

	var int $totalFrames;
	var int $totalPins;
	var int $remainingRolls;

	public function __construct(){
		$this->totalFrames = 10;
		$this->totalPins = 10;
		$this->remainingRolls = 2;
	}


	public function roll(int $pins): void
	{

	}

	public function score(): int
	{

	}
}