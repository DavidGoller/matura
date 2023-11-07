<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NewAdresse</title>
    </head>
    <body>
        <form action="index.php?aktion=newAdresse&pid=<?=$_GET['pid']?>" method="post">
            <p>
                <label>Strase <br></label>
                <input type="type" name="strase" placeholder="Strase" required>
            </p>
            <p>
                <label>Hausnr<br></label>
                <input type="type" name="hausnr" placeholder="Hausnr" required >
            </p>
            <p>
                <label>Ort<br></label>
                <input type="type" name="ort" placeholder="Ort" required>
            </p>
            <p>
                <label>PLZ<br></label>
                <input type="type" name="plz" placeholder="Plz" required >
            </p>
            <input type="submit" value="Add" />
        </form>

    </body>
    <button><a href="index.php?aktion=adresse&id=<?=$_GET['pid']?>">Person</a></button>  
</html>
