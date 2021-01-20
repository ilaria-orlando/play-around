<?php


class Game

{
    public $cardPlayer;
    public $handPlayer = [];
    public $totalPlayer;
    public $cardComputer;
    public $handComputer = [];
    public $totalComputer;
    public $message;

    public function run(){
        $player = new Player();
        $computer = new Computer();
        if(isset($_POST['deal'])){
            $player -> playerCards();
            $computer -> computerCards();
            //take the player cards and total defined in player class and define them in game class
            $this->cardPlayer = $player->cardPlayer;
            $this->totalPlayer = $player->totalPlayer;
            //do the same for computer
            $this->cardComputer = $player->cardComputer;
            $this->totalComputer = $player->totalComputer;
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