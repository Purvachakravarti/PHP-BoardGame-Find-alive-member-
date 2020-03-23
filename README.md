# PHP-BoardGame-Find-alive-member

Go Life and Death
The game of Go has been around for thousands of years and is known to have extremely complex strategy and depth. The rules of the game on the other hand, 
are very simple. Pieces, or stones, are placed on the intersections of a square grid, with size s. Here is a representation of a 9x9 board with some black and white stones (○ ●):
· · ○ ● ○ ● ● ● ○
● ○ ○ ● ○ · ● · ○
● ● · ● ○ ○ ○ ○ ○
● ● ● ● ● ● ● ● ●
● ● ○ ○ ○ ○ ○ ○ ○
● ○ · · · · · · ·
● ○ · ○ · · · ○ ·
● ○ · · · · · · ·
● ○ · · · · · · ·
One of the fundamental concepts of go is called life and death. A stone is considered to be alive if there are any open spaces (no enemy stones) 
surrounding its orthogonally adjacent points, the up/down/left/right positions. For example, for the black stone:
  Alive         Dead
· · · · ·     · · · · ·     ● ○ · · ·
· · ○ · ·     · · ○ · ·     ○ · · · ·
· · ● · ·     · ○ ● ○ ·     · · · · ·
○ · · · ·     · · ○ · ·     · · · · ·
· · · · ○     · · · · ·     · · · · ·

A group of stones can be can also be alive or dead, the black group:
  Alive            Dead
· · · · ·     · · · ○ ·
· · ○ ● ·     · · ○ ● ○
· · ● ● ○     · ○ ● ● ○
· · · · ·     · · ○ ○ ·
· · · · ·     · · · · ·
Given a board represented by a 2d array with size (s, s), with white pieces represented by “o”, black pieces represented by “#”, 
empty spaces represented by “.”, and a starting coordinate (i, j), write a function that takes in a board and coordinate and determine if the 
group that the starting piece belongs to is alive or not. (optional) Coordinates are 1-indexed and start on the bottom left corner, similar to a normal x-y coordinate system.
Examples:
· · · · ·
· ○ · · ·
· ● ○ · · 
· · · · · 
· · · · ·
[['.','.','.','.','.'],
 ['.','o','.','.','.'],
 ['.','#','o','.','.'],
 ['.','.','.','.','.'],
 ['.','.','.','.','.']]
(2, 1) -> (2, 3)
is_alive(board, (2, 3)) -> true

· ○ ● · ·
○ ● ○ ● · 
· · ● · · 
· · · · ·
· · · · ·
[['.','o','#','.','.'],
 ['o','#','o','#','.'],
 ['.','.','#','.','.'],
 ['.','.','.','.','o'],
 ['.','.','.','.','.']]
(1, 2) -> (3, 4)
is_alive(board, (3, 4)) -> false

· · · · ·
· ○ ● ● ·
● ● ○ ○ ○ 
· ○ ● ● · 
· · · · ·
[['.','.','.','.','.'],
 ['.','o','#','#','.'],
 ['#','#','o','o','o'],
 ['.','o','#','#','.'],
 ['.','.','.','.','.']]
(2, 1) -> (2, 3)
is_alive(board, (2, 3)) -> true
(2, 3) -> (4, 3)
is_alive(board, (4, 3)) -> true

· · ○ · ·
· ○ ● ○ ·
○ ● ● ● ○ 
○ ● ● ○ · 
· · ○ · ·
[['.','.','o','.','.'],
 ['.','o','#','o','.'],
 ['o','#','#','#','o'],
 ['o','#','#','o','.'],
 ['.','.','o','.','.']]
(2, 3) -> (4, 3)
is_alive(board, (4, 3)) -> true

· · ○ · ·
· ○ ● ○ ·
○ ● ● ● ○ 
○ ● ● ○ · 
· ○ ○ · ·
[['.','.','o','.','.'],
 ['.','o','#','o','.'],
 ['o','#','#','#','o'],
 ['o','#','#','o','.'],
 ['.','o','o','.','.']]
(2, 2) -> (3, 3)
is_alive(board, (3, 3)) -> false

● ○ · · ·
○ · · · · 
· ● ○ · · 
· · · · ·
· · · · ·
[['#','o','.','.','.'],
 ['o','.','.','.','.'],
 ['.','#','o','.','.'],
 ['.','.','.','.','.'],
 ['.','.','.','.','.']]
(0, 0) -> (1, 5)
is_alive(board, (1, 5)) -> false

● ○ · · ·
● ○ · · · 
● ○ · · · 
· ○ · · ·
· · · · ·
[['#','o','.','.','.'],
 ['#','o','.','.','.'],
 ['#','o','.','.','.'],
 ['.','o','.','.','.'],
 ['.','.','.','.','.']]
(0, 0) -> (1, 5)

is_alive(board, (1, 5)) -> true
· · · ○ ●
· · · ○ ● 
· · · ○ ● 
· · · ○ ●
· · ○ ● ●
[['.','.','.','o','#'],
 ['.','.','.','o','#'],
 ['.','.','.','o','#'],
 ['.','.','.','o','#'],
 ['.','.','o','#','#']]
(2, 4) -> (5, 3)
is_alive(board, (5, 3)) -> false

array(array('.','.','.','o','#'),
 array('.','.','.','o','#'),
 array('.','.','.','o','#'),
 array('.','.','.','o','#'),
 array('.','.','o','#','#'))

*/


//echo "Hello, Worldddd!";
// $board = array(
//  array('.','.','.','o','#'),
//  array('.','.','.','o','#'),
//  array('.','.','.','o','#'),
//  array('.','.','.','o','#'),
//  array('.','.','o','#','#'));

Test Cases:
Case:1
 $board = array(array('.','.','.','.','.'),
                 array('.','o','.','.','.'),
                 array('.','#','o','.','.'),
                 array('.','.','.','.','.'),
                 array('.','.','.','.','.'));
  $check = array(2, 1);


Case:2
 $board = array(array('.','.','.','.','.'),
                array('.','#','#','#','.'),
                array('#','#','o','o','o'),
                array('.','o','#','#','.'),
                array('.','.','.','.','.'));
 
 $check = array(2, 1);

