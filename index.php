<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username generator</title>
</head>

<body>
    <form action="username.php" method="POST">
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam"><br>
        <label for="tussenvoegsel">tussenvoegsel</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel"><br>
        <label for="achternaam">achternaam</label>
        <input type="text" id="achternaam" name="achternaam"><br>
        <input type="submit" value="Genereer username">
    </form>
    <?php

    if (isset($_POST["voornaam"])) {
        if (isset($_POST["achternaam"])) {
            header('Location: username.php');
        }
    }
    ?>
</body>

</html>