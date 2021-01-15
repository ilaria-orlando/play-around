<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $tryCounter;
    public $message;


    public function __construct(int $maxGuesses = 3)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;
    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)
        session_start();

        if(!empty($_SESSION['secretNumber'])){
            $this -> secretNumber = $_SESSION['secretNumber'];
        }

        if(empty($this -> secretNumber)){
            $this -> secretNumber = rand(1, 10);
            $_SESSION['secretNumber'] = $this -> secretNumber;
        }

        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        if(!empty($_POST['number'])){
            if($_POST['number'] == $this -> secretNumber){
                $this-> playerWins();
            }
            else{
                $this -> playerLoses();
            }
        }else{
            $this-> message = "Please guess a number!";
        }

        if(!empty($_POST['tries'])){
            $this->maxGuesses = $_POST['tries'];
        }

        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        $this-> message = "You win!";
    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        $this-> message = "You lose!";
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
    }
}