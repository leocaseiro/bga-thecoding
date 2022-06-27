<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * thecodingleocaseiro implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * thecodingleocaseiro game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

$this->harckCards = [
  0 => [
    'value' => [0,1,2,3],
    'column' => [1],
    'missing' => [4,5,6,7,8,9],
  ],
  1 => [
    'value' => [0,1,2,3],
    'column' => [2],
    'missing' => [4,5,6,7,8,9]
  ],
  2 => [
    'value' => [0,2,4,6,8],
    'column' => [1],
    'missing' => [1,3,5,7,9]
  ],
  3 => [
    'value' => [0,2,4,6,8],
    'column' => [2],
    'missing' => [1,3,5,7,9]
  ],
  4 => [
    'value' => [0,4,7],
    'column' => [2],
    'missing' => [1,2,3,5,8,9]
  ],
  5 => [
    'value' => [1,3,5,7,9],
    'column' => [1],
    'missing' => [0,2,4,6,8]
  ],
  6 => [
    'value' => [1,3,5,7,9],
    'column' => [2],
    'missing' => [0,2,4,6,8]
  ],
  7 => [
    'value' => [1,6,9],
    'column' => [2],
    'missing' => [0,2,3,4,5,7,8]
  ],
  8 => [
    'value' => [2,5,9],
    'column' => [2],
    'missing' => [0,1,3,4,6,7,8]
  ],
  9 => [
    'value' => [3,4,8],
    'column' => [2],
    'missing' => [0,1,2,5,6,7,9]
  ],
  10 => [
    'value' => [4,5,6],
    'column' => [1],
    'missing' => [0,1,2,3,7,8,9]
  ],
  11 => [
    'value' => [4,5,6],
    'column' => [2],
    'missing' => [0,1,2,3,7,8,9]
  ],
  12 => [
    'value' => [7,8,9],
    'column' => [1],
    'missing' => [0,1,2,3,4,5,6]
  ],
  13 => [
    'value' => [7,8,9],
    'column' => [2],
    'missing' => [0,1,2,3,4,5,6]
  ],
  14 => [
    'value' => ['A', 'C'],
    'column' => [0],
    'missing' => ['B','D','E','F']
  ],
  15 => [
    'value' => ['A', 'F'],
    'column' => [0],
    'missing' => ['B','C','D','E']
  ],
  16 => [
    'value' => ['B', 'C'],
    'column' => [0],
    'missing' => ['A','D','E','F']
  ],
  17 => [
    'value' => ['B', 'E'],
    'column' => [0],
    'missing' => ['A','C','D','F']
  ],
  18 => [
    'value' => ['D', 'E'],
    'column' => [0],
    'missing' => ['A','B','C','F']
  ],
  19 => [
    'value' => ['D', 'F'],
    'column' => [0],
    'missing' => ['A','B','C','E']
  ],
];
