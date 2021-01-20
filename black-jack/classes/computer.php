<?php


class Computer extends Game
{

    public function computerCards(){
            $this->sessionSave();
            $this->pullCard();
            $this->totalComputer();
    }

    public function sessionSave(){
        if(!empty($_SESSION['handComputer'])){
            $this->handComputer = $_SESSION['handComputer'];
        }

    }

    public function pullCard(){
        $this -> cardComputer = rand(1,11);
        array_push($this->handComputer, $this->cardComputer);
        $_SESSION['handComputer'] = $this->handComputer;
        return $this->handComputer;
    }



    public function totalComputer(){

        foreach($this->handComputer as $card){
            $this->totalComputer += $card;
        }

    }

}