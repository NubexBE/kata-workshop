<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    /** @return string[] */
    public function range(int $start, int $end): array
    {
		return $numbers = range($start, $end);
    }

	public function translate(int $number): string{
		if($number % 3 == 0 && $number % 5 == 0){
			return 'fizzbuzz';
		}
		if($number % 3 == 0){
			return 'fizz';
		}
		if($number % 5 == 0){
			return 'buzz';
		}
		return (string)$number;
	}
}
