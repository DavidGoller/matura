<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seminartermine</title>
    </head>
    <body>
        <table>
            <tr><th>Vorame</th><th>Nachname</th><th>Adresse</th><th>Auto</th><th>Lösche</th><th>Ändere</th></tr>
            <?php foreach ($personen as $person) { ?>
            <tr>
                <td><?=$person->getVorname()?></td>
                <td><?= $person->getNachname()?></td>
                <td><a href="index.php?aktion=adresse&id=<?= $person->getid()?>">Adresse</a></td>
                <td><a href="index.php?aktion=auto&id=<?= $person->getid()?>">Auto</a></td>
                <td><a href="index.php?aktion=delPerson&id=<?= $person->getid()?>">Lösche</a></td>
                <td><a href="index.php?aktion=changePerson&id=<?= $person->getId()?>">Ändere</a></td>
            </tr>
            <?php } ?>
            
           
        </table>
           <button><a href="index.php?aktion=newPerson">New Person</a></button>  
           <button><a href="index.php?aktion=newAuto">New Auto</a></button> 
           <button><a href="index.php?aktion=anzeigeAutos">Autos anzeigen</a></button> 
    </body>
</html>
