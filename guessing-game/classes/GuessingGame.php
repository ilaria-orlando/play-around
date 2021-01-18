<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $playerNumber;
    public $tryCounter = 0;
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

        if(!empty($_SESSION['tryCounter'])){
            $this -> tryCounter = $_SESSION['tryCounter'];
        }


        if(empty($this -> secretNumber)){
            $this -> secretNumber = rand(1, 10);
            $_SESSION['secretNumber'] = $this -> secretNumber;
        }

        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        if(!empty($_POST['number'])){
            $this -> playerNumber = $_POST['number'];
        }else{
            $this-> message = "Please guess a number!";
        }

        if(!empty($_POST['tries'])){
            $this->maxGuesses = $_POST['tries'];
            $_SESSION['maxGuesses'] = $_POST['tries'];
        }

        if(!empty($_SESSION['maxGuesses'])){
            $this->maxGuesses = $_SESSION['maxGuesses'];
        }

        if(isset($_POST['guess'])){
            $this -> tryCounter ++;
            $_SESSION['tryCounter'] = $this -> tryCounter;
            if($this->tryCounter <= $this->maxGuesses){
                if($this->secretNumber == $this->playerNumber){
                    $this->playerWins();
                }
                else{
                    $this -> message = "Try again!";
                }
            }
            else{
                $this->playerLoses();
            }
        }



        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        $this-> message = "You won in {$this ->tryCounter} tries!";
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