<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    /** @return string[] */
    public function range(int $start, int $end): array
    {
        $result = [];
            for($i=$start; $i<=$end; $i++) {
                $result = $this->translate($i);
            }
            return $result;
    }

	public function translate(int $number): string{
        return '2';
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
