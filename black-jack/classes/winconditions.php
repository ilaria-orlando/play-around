<?php


class Winconditions extends Game
{
    public $message;

    public function checkWin($totalPlayer, $totalComputer){
        if($totalPlayer == 21 && $totalComputer < 21){
            $this->message = "You won!";}
        else if($totalPlayer < 21 && $totalComputer > 21){
            $this->message = "You won!";
        }
        else if($totalPlayer > 21 || $totalPlayer < 21 && $totalComputer == 21){
            $this->message = "You lose!";
        }
        else{
            $this->message = "Pull a card";
        }
    }

}