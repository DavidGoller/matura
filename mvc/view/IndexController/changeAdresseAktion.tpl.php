<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewAdresse</title>
    </head>
    <body>
        <form action="index.php?aktion=changeAdresse&aid=<?=$_GET['aid']?>" method="post">
            <p>
                <label>Straße <br></label>
                <input type="type" name="strase" placeholder="Straße" value="<?=$adresse->getStrase(); ?>" required>
            </p>
            <p>
                <label>Hausnr<br></label>
                <input type="type" name="hausnr" placeholder="Hausnr" value="<?=$adresse->getHausnr(); ?>" required >
            </p>
            <p>
                <label>Ort<br></label>
                <input type="type" name="ort" placeholder="Ort" value="<?=$adresse->getOrt(); ?>" required>
            </p>
            <p>
                <label>PLZ<br></label>
                <input type="type" name="plz" placeholder="Plz" value="<?=$adresse->getPlz(); ?>" required >
            </p>
            <input type="submit" value="Add" />
        </form>
        
    </body>
</html>
