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
        <?php
        foreach ($registeres as $registered) {
            $boundle = Boundle::finde($registered->getBid());
        ?>
            <div class="outline">
                <p class="fw-bold fs-3  mb-1  mt-1"><?= $boundle->getName(); ?></p>
                <p class=" fs-4  mb-1  mt-1"><?= $registered->getExpiringDate(); ?></p>
                <div class="row container">
                    <?php
                    $courses= Course::findByBoundle($registered->getBid());
                    foreach ($courses as $course) {
                    ?>
                        <div class="row  bg-primary my-2 mx-2  mx-lg-5 fs-5 text-light ">
                            <div class="px-lg-5 px-3 py-4 py-lg-0 col-lg-7 col-7">
                                <p class="fw-bold fs-3  mb-1  mt-1"><?= $course->getName(); ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="row centerV mb-5 mb-lg-2">
            <a href="index.php?aktion=selectCourses&did=<?=$did ?>">
                <button class="centered btn btn-light btn-lg border-primary border-3 fs-1 px-5 " id="buttonSubmit">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
        </div>

    </div>
</body>
<footer>
    <?php
    include("footerAktion.tpl.php");
    ?>
</footer>

</html>