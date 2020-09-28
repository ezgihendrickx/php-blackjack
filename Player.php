<?php

declare(strict_types=1);
//Add 2 private properties
// class Player

class Player
{

    private array $cards;
    private bool $lost = false;
    private $deck;
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
        // $deck->drawCard();
        // $this->cards = [];
        $this->cards[] = $deck->drawCard();
        return $this->cards;
    }
    public function Surrender()
    {
    }
    public function getScore()
    {
        $totalscore = 0;
        foreach ($this->cards as $Card) {
            $totalscore += $Card->getValue();
        }
        return $totalscore;
    }

    public function hasLost()
    {
        if ($this->getScore() >= 22) {
            echo '<span style="background-color: red"> YOU LOSE</span>';
        }
    }

    public function getCards(): array
    {
        return $this->cards;
    }
}
