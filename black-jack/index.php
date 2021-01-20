<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

session_start();

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "classes/player.php";

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// So, you've reached the final stage huh?
// TODO: pat yourself on the back
// Great job! This means you've earned the freedom to build this exercise from scratch.
// One final word of advice: this game is much more complex, so you might want to use multiple classes in here.

//TODO: create deck
//TODO: class for player
//TODO: class for computer
//TODO: save cards in session


/*$values = [2, 3, 4, 5, 6, 7, 8, 9, "J", "Q", "K", "A"];
$suits = ["D", "H", "C", "S"];
$amount = [];
$cards = [];


for($i = 1; $i <= 52; $i++){
    array_push($amount, "card".$i);
}

foreach ($suits as $suit){
    foreach($values as $value){
        $cards[] = $value . $suit;
    }
}

echo var_dump($cards);*/

$game = new Player();
$game -> run();


require "view.php";