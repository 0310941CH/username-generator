<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Username generated</title>
</head>

<body>
    <?php

    $voornaam = $_POST["voornaam"];
    $tussenvoegsel = $_POST["tussenvoegsel"];
    $achternaam = $_POST["achternaam"];
    $vNaam1 = substr($voornaam, 0, 1);
    $lengthVNaam = strlen($voornaam);
    $lengthANaam = strlen($achternaam);
    $totalLength = $lengthANaam + $lengthVNaam;
    $username = strtolower($vNaam1 . $achternaam . $totalLength);

    echo "<table>
    <tr>
        <th>Voornaam</th>
        <th>Tussenvoegsels</th>
        <th>Achternaam</th>
        <th>Username</th>
    </tr>
    <td>$voornaam</td>
    <td>$tussenvoegsel</td>
    <td>$achternaam</td>
    <td>$username</td>
</table>"
    ?>

</body>

</html>