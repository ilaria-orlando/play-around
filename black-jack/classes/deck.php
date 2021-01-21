<?php

class Deck

{
    public $deck = [];
    public $card;
    public $suits = ["D", "H", "S", "C"];
    public $faces = [2, 3, 4, 5, 6, 7, 8, 9, "J", "Q", "K", "A"];


    public function createDeck(){

        foreach ($this->suits as $suit){
            foreach ($this->faces as $face){
                $this->card = $suit.$face;
                array_push($this->deck, $this->card);
            }
        }
        return $this->deck;
    }


}