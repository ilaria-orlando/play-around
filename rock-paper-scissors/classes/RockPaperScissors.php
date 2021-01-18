<?php

//TODO: function to save players choice (rock paper scissors)
//TODO: function that generates random choice for the computer
//TODO: function that compares player and computer
//TODO: function with win message and lose message
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
            $this->playerWeapon = $_POST['weapon'];
            $this->randomNumber = rand(1,3);
            $this->Computerweapon();
            echo $this->playerWeapon . " " . $this->computerWeapon;
            $this->winConditions();
            $this->message = "You chose {$_POST['weapon']} and the computer chose {$this->computerWeapon}<br>{$this->winOrLose}";
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