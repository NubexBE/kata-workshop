Bowling scores Kata - PHP Version
=================================

This is an adapted version of the kata. [See the original version](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata), where you can also find a TDD solution in slide form.

Bowling rules
-------------

- A game consists of 10 frames
- In each frame, 10 pins are set up and the player has up to two rolls to knock down as many as possible
- A frame’s score is the number of pins knocked down, with bonuses for strikes and spares
- A spare is knocking down all the pins in two rolls of a frame. The associated bonus is the number of pins knocked down on the next roll
- A strike is knocking down all (10) pins on the first roll of a frame. This ends the frame, and the associated bonus is the number of pins knocked down on the next two rolls
- On the last frame, if the player scores a spare or a strike, they may keep rolling to earn their bonuses. However, the player may not roll more than three times in that frame

Note: The highest possible score is 300 points

Kata instructions
-----------------

Write the code needed to compute the score of a game, following the 3 rules of TDD:

1. Do not write production code unless it makes a failing test pass
2. Do not write more of a test if a test fails; a compilation error counts as a failure
3. You must not write more production code than is necessary to make the failing test pass

Structure
-----------

- `src`
  - `GameInterface.php` - this interface must **not** be modified
  - `Game.php` - class to create; it must implement `GameInterface`
- `tests`
  - `GameTest.php` - test class to complete

Installation
------------

Prerequisites

- PHP 7.4+
- [Composer](https://getcomposer.org)

Setup

```bash
git clone git@github.com:blanc-frederic/kata.git
cd kata/Bowling
composer install
```

Tests
-----

Run the tests

```bash
composer test
```

To run the tests with code coverage:

```bash
composer test-coverage
```

The report will be generated in `/build/coverage`; open `index.html` in a browser to view it.
