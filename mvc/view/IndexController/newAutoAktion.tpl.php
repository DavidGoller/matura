<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewAuto</title>
    </head>
    <body>
        <form action="index.php?aktion=saveAuto" method="post">
            <p>
                <label>Marke <br></label>
                <input type="type" name="marke" placeholder="marke" required>
            </p>
            <p>
                <label>Modell<br></label>
                <input type="type" name="modell" placeholder="modell" required >
            </p>
            <p>
                <label>Kennzeichen<br></label>
                <input type="type" name="kennzeichen" placeholder="kennzeichen" required>
            </p>
            <input type="submit" value="Add" />
        </form>

    </body>
    <button><a href="index.php?aktion=alleP">Zurück</a></button>  
</html>
