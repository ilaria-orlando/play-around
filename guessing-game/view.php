<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casino royale - guessing game</title>
</head>
<body>
    <?php   echo $game->message;
            echo $game->secretNumber;
    ?>
    <form method="POST" action="">
        <label for="tries">How many times do you want to try?:</label><br>
        <input type="number" name="tries" min="1" max="10"><br>
        <label for="number">Pick a number between 1 and 10!:</label><br>
        <input type="number" name="number" min="1" max="10"><br>
        <button type="submit" name="guess">Guess!</button>
    </form>
</body>
</html>
