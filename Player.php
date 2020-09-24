<?php

declare(strict_types=1);
//Add 2 private properties
// class Player

class Player
{

    private array $cards;
    private bool $lost = false;

    /**
     * Player constructor.
     * @param Deck $deck
     */
    public function __construct(Deck $deck)
    {

        $playerCard1 = $deck->drawCard();
        $playerCard2 = $deck->drawCard();
        $this->cards = [$playerCard1, $playerCard2];
    }
    //Add a couple of empthy methods to this class
    public function Hit(Deck $deck)
    {
        $deck->drawCard();
        $this->cards = [];
    }
    public function Surrender()
    {
    }
    public function getScore()
    {
    }
    public function hasLost()
    {
    }
    public function getCards(): array
    {
        return $this->cards;
    }
}
