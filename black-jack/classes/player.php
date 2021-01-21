<?php


class Player
{
    public $cardPlayer;
    public $totalPlayer;
    public $value;
    public $handPlayer = [];
    public $allValuesPlayer = [];

    public function playerCards($card){
            $this->sessionSave();
            $this->pullCard($card);
            $this->totalPlayer();
    }

    public function sessionSave(){
        if(!empty($_SESSION['allValuesPlayer'])){
            $this->handPlayer = $_SESSION['allValuesPlayer'];
        }
    }

    /*public function pullCard(){
        $this -> cardPlayer = rand(1,11);
        array_push($this->handPlayer, $this->cardPlayer);
        $_SESSION['handPlayer'] = $this->handPlayer;
        return $this->cardPlayer;
    }*/

    public function pullCard($card){
        if(strpbrk($card, "J") || strpbrk($card, "Q") || strpbrk($card, "K")){
            $this->value = 10;
        }
        else if (strpbrk($card, "A")){
            $this->value = 11;
        }
        else{
            for($i = 2; $i <= 9; $i++){
                if(strpbrk($card, "{$i}")){
                    $this->value = $i;
                }
            }
        }
        array_push($this->allValuesPlayer, $this->value);
        $this->cardPlayer = $card;
        $_SESSION['allValuesPlayer'] = $this->allValuesPlayer;
        return $this->cardPlayer;
    }

    public function totalPlayer(){

        $this->totalPlayer = array_sum($this->allValuesPlayer);
        return $this->totalPlayer;
    }

}