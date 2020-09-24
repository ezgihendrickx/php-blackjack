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
            //                $deck = new Deck();
            //                $deck->shuffle();
            //                $player = new Player($deck);
            //                $dealer = new Player($deck);
            $blackjack = new Blackjack();
            foreach ($blackjack->getPlayer()->getCards() as $card) {
                echo "<span style='font-size:150px'>" . $card->getUnicodeCharacter(true) . "</span>";
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

        <button type="submit" id="hit" name="hit" value="hit" <?php //echo ($player->hasLost()) ? 'style="display: none;"' : ''; 
                                                                ?> class="">Hit
        </button>
        <button type="submit" id="stand" name="stand" value="stand" class="">Stand
        </button>
        <button type="submit" id="surrender" name="surrender" value="surrender" class="">Surrender
        </button>

    </form>

    <div class="foto col-2">
        <img src="jokerbatman.jpg" alt="filthyjokerface" width="290px">
    </div>
</body>

</html>