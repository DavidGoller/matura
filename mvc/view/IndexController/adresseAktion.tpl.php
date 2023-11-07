<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adressen</title>
    </head>
    <body>
        <p>Adressen von <?= $User->getVorname()  ?></p>
        <table>
            <tr><th>Straße</th><th>Hausnummer</th><th>Ort</th> <th>Plz</th><th>Löschen</th><th>Change<th></tr>
            <?php foreach ($adresse as $adresse) { ?>
            <tr>
                <td><?= $adresse->getStrase()?></td>
                <td><?=  $adresse->getHausnr()?></td>
                <td><?= $adresse->getOrt()?></td>
                <td><?= $adresse->getPlz()?></td>
                <td><a href="index.php?aktion=delAdresse&pid=<?=$User->getid()?>&aid=<?=$adresse->getid()?>">Löschen</a></td>
                <td><a href="index.php?aktion=changeAdresse&aid=<?=$adresse->getid()?>">Change</a></td>
            </tr>
            <?php } ?>
        </table>
            <button><a href="index.php?aktion=newAdresse&pid=<?=$User->getid()?>">New Adresse</a></button>  
            <button><a href="index.php?aktion=alleP">Zurück</a></button>  
    </body>
</html>
