Conway's Game of Life — Outline & Rules
========================================

What is the Game of Life?
-------------------------

The Game of Life is a **cellular automaton** devised by the British
mathematician **John Horton Conway in 1970**. It is a zero-player game:
its evolution is entirely determined by its initial state, with no
further input from a player.

Despite its extremely simple rules, the Game of Life is **Turing complete**
and can produce surprisingly complex, lifelike patterns.

The Universe
------------

- The "universe" is an infinite, two-dimensional orthogonal grid of square cells.
- Each cell is in one of two possible states:
  - **alive** (often drawn as a filled cell)
  - **dead** (often drawn as an empty cell)
- Every cell has exactly **8 neighbours**: the cells horizontally,
  vertically, and diagonally adjacent.

```
N N N
N C N      C = the cell, N = its 8 neighbours
N N N
```

Generations
-----------

Time in the Game of Life advances in discrete **ticks** (also called
**generations**). At every tick, the next state of every cell is computed
**simultaneously** based on the current state of its 8 neighbours.

It is essential that all cells are evaluated against the **same snapshot**
of the previous generation — never against partially updated state.

The Four Rules
--------------

For each cell, count its live neighbours `n` and apply:

| Current state | Live neighbours `n` | Next state | Reason          |
|---------------|---------------------|------------|-----------------|
| alive         | `n < 2`             | dead       | underpopulation |
| alive         | `n == 2` or `n == 3`| alive      | survival        |
| alive         | `n > 3`             | dead       | overpopulation  |
| dead          | `n == 3`            | alive      | reproduction    |
| dead          | otherwise           | dead       | stays dead      |

Equivalently, in a single sentence:
> A cell is alive in the next generation if it has exactly 3 live neighbours,
> or if it is currently alive and has exactly 2 live neighbours.

Boundary Handling
-----------------

The classic Game of Life is played on an infinite grid. For the kata,
choose one convention and stick with it:

- **Bounded grid** — cells outside the grid are considered dead.
  Simple and recommended for the first iteration.
- **Toroidal grid** — the grid wraps around: the top edge connects to
  the bottom edge, and the left edge to the right edge.
- **Infinite grid** — represent only live cells in a sparse data
  structure (e.g. a set of `(x, y)` coordinates).

Notable Patterns
----------------

Useful examples to drive tests with:

**Still life — Block** (stays the same forever):
```
. . . .
. X X .
. X X .
. . . .
```

**Oscillator — Blinker** (period 2):
```
. . . . .          . . . . .
. . . . .          . . X . .
. X X X .   →     . . X . .   →   (back to original)
. . . . .          . . X . .
. . . . .          . . . . .
```

**Oscillator — Toad** (period 2):
```
. . . . . .          . . . . . .
. . . . . .          . . . X . .
. . X X X .   →     . X . . X .
. X X X . .          . X . . X .
. . . . . .          . . X . . .
. . . . . .          . . . . . .
```

**Spaceship — Glider** (translates across the grid, period 4):
```
. X . .
. . X .
X X X .
. . . .
```

Suggested TDD Order
-------------------

A natural order of failing tests for this kata:

1. An empty grid stays empty.
2. A single live cell dies (underpopulation).
3. A live cell with exactly 2 live neighbours survives.
4. A live cell with exactly 3 live neighbours survives.
5. A live cell with 4+ live neighbours dies (overpopulation).
6. A dead cell with exactly 3 live neighbours becomes alive (reproduction).
7. A blinker oscillates correctly across two generations.
8. A block remains stable across multiple generations.
9. A glider translates one diagonal step every 4 generations.

References
----------

- Original publication: Martin Gardner, *Mathematical Games*,
  Scientific American, October 1970.
- [Wikipedia: Conway's Game of Life](https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life)
- [LifeWiki](https://conwaylife.com/wiki/) — catalogue of patterns.
