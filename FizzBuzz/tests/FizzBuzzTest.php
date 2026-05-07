<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testStandard(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->translate(2);

        $this->assertSame('2', $result);
    }

    public function testSample(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = implode(', ', $fizzBuzz->range(1, 15));

        $expected = '1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz';
        $this->assertSame($expected, $result);
    }

	public function testRange()
	{
		$fizzBuzz = new FizzBuzz();
		$result = $fizzBuzz->range(1, 3);
		$expected = ['1','2', 'fizz'];
		$this->assertSame($expected, $result);
	}

    public function testFizz()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->translate(3);
        $expected = 'fizz';
        $this->assertSame($expected, $result);
    }

    public function testBuzz() : void
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->translate(5);
        $expected = 'buzz';
        $this->assertSame($expected, $result);
    }

    public function testFizzBuzz() : void
    {

        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->translate(15);
        $expected = 'fizzbuzz';
        $this->assertSame($expected, $result);
    }
}
