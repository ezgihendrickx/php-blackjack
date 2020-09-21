<?php

declare(strict_types=1);
//Add 3 private properties
class Blackjack
{
    private $player;
    private $dealer;
    private $deck;
    public function __construct($player, $dealer, $deck)
    {

        $this->player = $player;
        $this->dealer = $dealer;
        $this->deck = $deck;
    }
    // Add a couple of public methods to this class

    /**
     * Get the value of deck
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Get the value of dealer
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * Get the value of player
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
