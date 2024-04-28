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
        <div class="row container">
            <?php
            foreach ($dogs as $dog) {
            ?>
                <div class="row  bg-primary my-2 mx-2  mx-lg-5 fs-5 text-light ">
                    <div class="px-lg-5 px-3 py-4 py-lg-0 col-lg-7 col-7">
                        <p class="fw-bold fs-3  mb-1  mt-1"><?= $dog->getName(); ?></p>
                        <p class="mb-0">Microchip: <?= $dog->getMicrochip(); ?></p>
                        <p class="mb-0">Breed: <?= $dog->getBreed(); ?></p>
                        <p class="mb-1">Gender: <?= $dog->getGender(); ?></p>
                    </div>
                    <div class="px-lg-5 py-3 py-lg-5 pb-3 col-lg-5 col-5">

                        <a href="index.php?aktion=courses&did=<?= $dog->getId() ?>">
                            <button type="button" class="my-2  btn btn-light btn-lg ">Courses</button>
                        </a>
                        <a href="index.php?aktion=editDog&did=<?= $dog->getId() ?>">
                            <button type="button" class="my-2  btn btn-light btn-lg ">Change</button>
                        </a>
                        
                        <a href="index.php?aktion=deleteDog&did=<?= $dog->getId() ?>">
                            <button type="button" class="my-2 btn btn-danger btn-lg ">Delete</button>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row centerV mb-5 mb-lg-2">
            <a href="index.php?aktion=editDog&did=0">
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