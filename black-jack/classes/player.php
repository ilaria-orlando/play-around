<?php


class Player extends Game
{


    public function playerCards(){
            $this->sessionSave();
            $this->pullCard();
            $this->totalPlayer();
    }

    public function sessionSave(){
        if(!empty($_SESSION['handPlayer'])){
            $this->handPlayer = $_SESSION['handPlayer'];
        }
    }

    public function pullCard(){
        $this -> cardPlayer = rand(1,11);
        array_push($this->handPlayer, $this->cardPlayer);
        $_SESSION['handPlayer'] = $this->handPlayer;
        return $this->cardPlayer;
    }



    public function totalPlayer(){

        foreach($this->handPlayer as $card){
            $this->totalPlayer += $card;
        }
        return $this->totalPlayer;
    }

}