Conway's Game of Life
=====================

Problem
-------

Compute the next generation of a two-dimensional grid of cells, where each cell
is either **alive** or **dead**.

Rules (applied simultaneously to every cell):

- Any live cell with fewer than 2 live neighbours dies (underpopulation)
- Any live cell with 2 or 3 live neighbours survives
- Any live cell with more than 3 live neighbours dies (overpopulation)
- Any dead cell with exactly 3 live neighbours becomes alive (reproduction)

A neighbour is any of the 8 cells horizontally, vertically or diagonally adjacent.

Sample
------

Starting grid (a "blinker"):

```
. . . . .
. . . . .
. X X X .
. . . . .
. . . . .
```

Next generation:

```
. . . . .
. . X . .
. . X . .
. . X . .
. . . . .
```
