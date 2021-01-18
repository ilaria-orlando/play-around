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
    public $message;

    public function run()
    {
        if(isset($_POST['choose'])){
            $this->playerWeapon = $_POST['weapon'];
            $this->randomNumber = rand(1,3);
            $this->Computerweapon();
            echo $this->playerWeapon . $this->computerWeapon;
        }
    }

    public function Computerweapon(){
        switch ($this -> randomNumber){
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
        if()
    }
}