<?php

declare(strict_types=1);
//Add 3 private properties
class Blackjack
{
    private Player $player;
    private $dealer;
    private Deck $deck;
    //constructor for every start of a new game
    public function __construct()
    {
        //create a new deck of 52 cards
        $this->deck = new Deck();
        // shuffle the 52 cards
        $this->deck->shuffle();
        // create a new player
        $this->player = new Player($this->deck);
        // create a new dealer
        $this->dealer = new Player($this->deck);

        // $this->player = $player;
        // $this->dealer = $dealer;
        // $this->deck = $deck;
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
