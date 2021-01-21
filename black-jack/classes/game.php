<?php
require_once "player.php";
require_once "computer.php";
require_once "winconditions.php";
require_once "deck.php";

class Game

{
    public $cardPlayer;
    public $totalPlayer;
    //public $cardComputer;
    //public $totalComputer;
    public $message;
    public $deck = [];
    public $value;

    public function run(){
        $player = new Player();
        //$computer = new Computer();
        //$checkWin = new Winconditions();
        $newDeck = new Deck();
        if(isset($_POST['deal'])){
            $newDeck -> createDeck();
            $this->deck = $newDeck->deck;
            shuffle($this->deck);

            $player -> playerCards(array_shift($this->deck));
            //$computer -> computerCards();




            //$player -> pullCard(array_shift($this->deck));

            //take the player cards and total defined in player class and define them in game class
            $this->cardPlayer = $player->cardPlayer;
            $this->totalPlayer = $player->totalPlayer;
            $this->value = $player->value;

            //do the same for computer
            //$this->cardComputer = $computer->cardComputer;
            //$this->totalComputer = $computer->totalComputer;

            //pass the variables totalPlayer and totalComputer through the function so win and lose conditions can be checked
            //$checkWin -> checkWin($this->totalPlayer, $this->totalComputer);
            //$this->message = $checkWin ->message;
        }

        $this->reset();
    }


    //reset the session if reset button is clicked
    public function reset(){
        if(isset($_POST['reset'])){
            session_destroy();
        }
    }


}