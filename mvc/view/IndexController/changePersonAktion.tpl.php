<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ChangePerson</title>
    </head>
    <body>
        <form action="index.php?aktion=changePerson&id=<?= $person->getId()?>" method="post">
        <p>
        <label>Vorname</label>
        <input type="type" name="vorname" placeholder="Vorame" value="<?=$person->getVorname()?>" required />
        </p>
        <p>
        <label>Nachname</label>
        <input type="type" name="nachname" placeholder="Nachname" value="<?=$person->getNachname()?>" required />
        </p>
        <input type="submit" value="Change" />
        </form>
       
    </body>
    <button><a href="index.php?aktion=alleP">Zurück</a></button>  
</html>