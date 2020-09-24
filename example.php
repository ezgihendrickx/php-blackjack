<?php

declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Blackjack.php';
require 'Player.php';
require 'index.php';


$deck = new Deck();
$deck->shuffle();
foreach ($deck->getCards() as $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}
