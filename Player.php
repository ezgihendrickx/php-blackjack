<?php

declare(strict_types=1);
//Add 2 private properties
// class Player
// {
//     private array $cards;
//     private bool $lost = false;
//     // public function __construct(array $cards, bool $lost)
//     // {

//     //     // $card = new Card(new Suit('DIAMOND'), 10);
//     //     // $cardTwo = new Card(new Suit('SPADE'), 2);
//     //     $this->cards = $cards;
//     //     $this->lost = $lost;
//     //     $card = $cards[0];
//     //     $card = $cards[3];
//     // }
//     public function __construct(Deck $deck)
//     {
//         $playerCard1 = $deck->drawCard();
//         $playerCard2 = $deck->drawCard();
//         $this->cards = [$playerCard1, $playerCard2];
//     }
//     // Add a couple of empthy methods to this class
//     public function Hit(): int
//     {
//         return $this->int;
//     }
//     public function Surrender(): int
//     {
//         return $this->int;
//     }
//     public function getScore(): int
//     {
//         return $this->int;
//     }
//     public function hasLost(): int
//     {
//         return $this->int;
//     }
// }
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
}
