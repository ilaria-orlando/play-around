<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Blackjack!</title>
    </head>
    <body>
    <?php echo var_dump($game->deck) ?>
        <h1>Blackjack</h1>
        <form method="post" action="">
            <button type="submit" name="deal">Deal card</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        <div>
            <p>Your recent card: <?php echo $game->cardPlayer; ?></p>
            <p>Your total: <?php echo $game->totalPlayer;?></p>
            <p>Computer's recent card: <?php echo $game->cardComputer; ?></p>
            <p>Computer's total: <?php echo $game->totalComputer; ?></p>
            <?php echo $game->message; ?>
        </div>
    </body>
</html>