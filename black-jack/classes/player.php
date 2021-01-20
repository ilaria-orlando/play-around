<?php


class Player
{

    public $cardPlayer;
    public $handPlayer = [];
    public $totalPlayer;

    public function run(){
        if(isset($_POST['deal'])){
            $this->pullCard();
            $this->sessionSave();
            $this->totalPlayer();
        }

    }

    public function pullCard(){
        $this -> cardPlayer = rand(1,11);
        array_push($this->handPlayer, $this->cardPlayer);
        $_SESSION['handPlayer'] = $this->handPlayer;
        return $this->handPlayer;
    }

    public function sessionSave(){
        if(!empty($_SESSION['handPlayer'])){
            $this->handPlayer = $_SESSION['handPlayer'];
        }
    }

    public function totalPlayer(){

        foreach($this->handPlayer as $card){
            $this->totalPlayer += $card;
        }

    }

}