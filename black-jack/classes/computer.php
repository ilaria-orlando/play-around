<?php


class Computer
{
    public $cardComputer;
    public $totalComputer;
    public $value;
    public $handComputer = [];
    public $allValuesComputer = [];

    public function computerCards($card2){
            $this->sessionSave();
            $this->pullCard($card2);
            $this->totalComputer();
    }

    public function sessionSave(){
        if(!empty($_SESSION['allValuesComputer'])){
            $this->allValuesComputer = $_SESSION['allValuesComputer'];
        }

    }

    public function pullCard($card2){
        if(strpbrk($card2, "J") || strpbrk($card2, "Q") || strpbrk($card2, "K")){
            $this->value = 10;
        }
        else if (strpbrk($card2, "A")){
            $this->value = 11;
        }
        else{
            for($i = 2; $i <= 10; $i++){
                if(strpbrk($card2, "{$i}")){
                    $this->value = $i;
                }
            }
        }
        array_push($this->allValuesComputer, $this->value);
        $this->cardComputer = $card2;
        $_SESSION['allValuesComputer'] = $this->allValuesComputer;
        return $this->cardComputer;
    }


    public function totalComputer(){

        foreach($this->allValuesComputer as $card){
            $this->totalComputer += $card;
        }
        return $this->totalComputer;

    }

}