<?php
require_once "player.php";
require_once "computer.php";
require_once "winconditions.php";
require_once "deck.php";

class Game

{
    public $cardPlayer;
    public $totalPlayer;
    public $cardComputer;
    public $totalComputer;
    public $message;
    public $deck = [];
    public $deckLength;

    public function run(){
        $player = new Player();
        $computer = new Computer();
        $checkWin = new Winconditions();
        $newDeck = new Deck();

        //create the deck and shuffle it
        $newDeck -> createDeck();
        $this->deck = $newDeck->deck;
        shuffle($this->deck);



        if(isset($_POST['deal'])){

            //use SESSION so the cards dealed ar substracted from the shuffled deck
            if(!empty($_SESSION['deck'])){
                $this->deck = $_SESSION['deck'];
            }
            //parse card to player and computer
            $player -> playerCards(array_shift($this->deck));
            $computer -> computerCards(array_shift($this->deck));
            // store the new deck with subtracted cards in the session
            $_SESSION['deck'] = $this->deck;


            //take the player cards and total defined in player class and define them in game class
            $this->cardPlayer = $player->cardPlayer;
            $this->totalPlayer = $player->totalPlayer;

            //do the same for computer
            $this->cardComputer = $computer->cardComputer;
            $this->totalComputer = $computer->totalComputer;

            //parse the variables totalPlayer and totalComputer through the function so win and lose conditions can be checked
            $checkWin -> checkWin($this->totalPlayer, $this->totalComputer);
            $this->message = $checkWin ->message;
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