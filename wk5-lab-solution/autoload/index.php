<?php
// require 'app/calc.php';
// require 'app/page1.php';
use MyApp\Game\Player\Player;
use MyApp\Game\Game;

require realpath('vendor/autoload.php');
// require 'app/game/player/Player.php';
$player = new Player();

// echo TAX;
echo "<br>" . add(2, 3);
// echo "<br>" . multiply(2, 3);

// echo "<br>" . rand_char('Hello there!');

new Game();