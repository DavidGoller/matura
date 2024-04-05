<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="./view/css/strapless.css" rel="stylesheet" />
    <link href="./view/css/style.css" rel="stylesheet" />


    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="./rscr/js/bootstrap.bundle.js"></script>
    <?php
    include("headerAktion.tpl.php");

    ?>
</head>

<body>

    <div class="body container my-0 my-lg-5 px-lg-5 px-1 pb-3">
        <div class="row">
            <?php
            foreach ($dogs as $dog) {
                echo ($dog);
            }
            ?>
        </div>
        <div class="row centerV">
            <a href="index.php?aktion=editDog "> <button class="centered btn btn-light btn-lg border-primary border-3 fs-1 px-5 " id="buttonSubmit"><i class="fa-solid fa-plus"></i></button></a>
        </div>

    </div>
</body>
<footer>
    <?php
    include("footerAktion.tpl.php");
    ?>
</footer>

</html>