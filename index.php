<?php

require_once 'Suit.php';
require_once 'Card.php';
require_once 'Deck.php';
require_once 'Blackjack.php';
require_once 'Player.php';
require_once 'Dealer.php';

session_start();

if (isset($_POST['new'])) {
    unset($blackjack);
    session_unset();
}

if (!isset($_SESSION['blackjack'])) {
    $blackjack = new Blackjack();
    $_SESSION['blackjack'] = serialize($blackjack);
} else {
    $blackjack = unserialize($_SESSION['blackjack'], [Blackjack::class]);
}
if (isset($_POST['hitBtn'])) {
    $blackjack->getPlayer()->hit($blackjack->getDeck());

    if (isset($_POST[''])) {
        $blackjack->getPlayer()->hasLost();
    }
    if (isset($_POST[''])) {
        $blackjack->getDealer()->hasLost();
    }

    $_SESSION['blackjack'] = serialize($blackjack);
    // add dealer counter
    // while ($_SESSION['blackjack']->getDealer()->getScore() <= 15) {
    //     $_SESSION['blackjack']->getDealer()->Hit();
    //     if ($_SESSION['blackjack']->getDealer()->getScore() > 21) {
    //         $_SESSION['blackjack']->setReult('Player wins!'); //Dealer busted!!!
    //         $_SESSION['blackjack']->getDealer()->Surrender();
    //     }
    // }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="container">

        <div class="header">
            <h1><code>BlackJack</code></h1>
        </div>

        <div class="content col-4">
            <h2><code>Player</code></h2>
            <?php

            echo "<br>";
            foreach ($blackjack->getPlayer()->getCards() as $card) {
                echo "<span style='font-size:120px'>" . $card->getUnicodeCharacter(true) . "</span>";
            }
            // SHOW PLAYER HAND SCORE
            echo "<br>";
            echo "<span style='font-size: 30px'>" . "Player &nbsp;&nbsp;" . $blackjack->getPlayer()->getScore() . "</span>";
            if ($blackjack->getPlayer()->hasLost(true)) {
                echo "Player Lose";
            }
            echo "<br>";
            echo "<span style='font-size: 30px'>" . "Dealer &nbsp;&nbsp;" . $blackjack->getDealer()->getScore() . "</span>";
            if ($blackjack->getDealer()->hasLost(true)) {
                echo "Dealer Lose";
            }

            ?>

        </div>


        <div class="dealer col-4">
            <h2> <code> Dealer </code> </h2>
            <?php
            foreach ($blackjack->getDealer()->getCards() as $card) {
                echo "<span style='font-size:150px'>" . $card->getUnicodeCharacter(true) . "</span>";
            }
            ?>
        </div>

    </div>

    <!-- <form action="classes/Blackjack.class.php" method="post"> -->
    <!-- <input type="button" name="hitCard" value="HIT" onclick=""> -->

    <form method="post" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                                ?>" class="">

        <!-- <input type="text"> type="submit" id="hit" name="hit" value="hit" <?php //echo ($player->hasLost()) ? 'style="display: none;"' : ''; 
                                                                                ?> class="">Hit
        </button>
        <input type="submit" id="stand" name="stand" value="stand" class="">Stand
        </button>
        <input type="submit" id="surrender" name="surrender" value="surrender" class="">Surrender
        </button> -->
        <form action="" method="post">
            <input class="btn btn-primary" type="submit" name="new" value="NEW GAME" />
            <input class="btn btn-primary" type="submit" name="hitBtn" value="HIT" />
            <input class="btn btn-primary" type="submit" name="standBtn" value="STAND" />
            <input class="btn btn-danger" type="submit" name="surrenderBtn" value="SURRENDER" />

        </form>
    </form>

    <div class="foto col-2">
        <img src="jokerbatman.jpg" alt="filthyjokerface" width="290px">

    </div>

</body>

</html>