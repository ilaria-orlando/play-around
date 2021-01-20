<?php

class RockPaperScissors
{
    public $playerWeapon;
    public $computerWeapon;
    public $randomNumber;
    public $winOrLose;
    public $message;

    public function run()
    {
        if(isset($_POST['choose'])){
            //check which weapon the player has chosen
            $this->playerWeapon = $_POST['weapon'];
            //create a random number each time the button is clicked and use a switch case to translate the number into a weapon
            $this->randomNumber = rand(1,3);
            $this->Computerweapon();
            //define the message the player will see
            $this->message = "You chose {$this->playerWeapon} and the computer chose {$this->computerWeapon}<br>";
            //message will not return player's weapon when defined after the function winConditions, instead sometimes returns an integer
            //check the winconditions
            $this->winConditions();
        }
    }

    public function Computerweapon(){
        switch ($this->randomNumber){
            case 1:
                $this->computerWeapon = "Rock";
                break;
            case 2:
                $this->computerWeapon = "Paper";
                break;
            case 3:
                $this->computerWeapon = "Scissors";
        }
    }

    public function winConditions(){
        if($this->playerWeapon == $this->computerWeapon){
            $this->winOrLose = "it's a tie!";
        }
        else if($this->playerWeapon = "Rock" && $this->computerWeapon = "Scissors"){
            $this ->winOrLose = "You win!";
        }
        else if($this->playerWeapon = "Paper" && $this->computerWeapon = "Rock"){
            $this ->winOrLose = "You win!";
        }
        else if($this->playerWeapon = "Scissors" && $this->computerWeapon = "Paper"){
            $this ->winOrLose = "You win!";
        }
        else if($this->playerWeapon = "Rock" && $this->computerWeapon = "Paper"){
            $this ->winOrLose = "You lose!";
        }
        else if($this->playerWeapon = "Paper" && $this->computerWeapon = "Scissors"){
            $this ->winOrLose = "You lose!";
        }
        else if($this->playerWeapon = "Scissors" && $this->computerWeapon = "Rock"){
            $this ->winOrLose = "You lose!";
        }
    }

}