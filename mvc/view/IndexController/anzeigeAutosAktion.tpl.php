<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autos</title>
    </head>
    <body>
        <table>
            <tr><th>Marke</th><th>Modell</th><th>Kennzeichen</th></tr>
            <?php foreach ($auto as $auto) { ?>
            <tr>
                <td><?=$auto->getMarke()?></td>
                <td><?= $auto->getModell()?></td>
                <td><?= $auto->getKennzeichen()?></td>
            </tr>
            <?php } ?>
            
           
        </table>
           <button><a href="index.php?aktion=alleP">Zurück</a></button>  

    </body>
</html>
