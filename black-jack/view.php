<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Blackjack!</title>
    </head>
    <body>
        <?php echo whatIsHappening(); ?>
        <h1>Blackjack</h1>
        <form method="post" action="">
            <button type="submit" name="deal">Deal card</button>
            <button type="submit" name="reset">Reset</button>
        </form>
        <?php echo $game->cardPlayer; ?>
        <?php echo $game->totalPlayer;?>
    </body>
</html>