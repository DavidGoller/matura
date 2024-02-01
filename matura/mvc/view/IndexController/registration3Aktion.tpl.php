<!doctype html>
<html lang="en">


<head>
    <title>Register2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="./view/css/strapless.css" rel="stylesheet" />
    <link href="./view/css/style.css" rel="stylesheet" />


    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="./rscr/js/bootstrap.bundle.js"></script>

    <!-- Font Awsome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--IDK TBH-->
    <script src="./rscr/js/script.js "></script>

    <!--FavIcon-->
    <link rel="icon" type="image/x-icon" href="./rscr/img/favlogo.png">
</head>


<body class="bg-primary">
    <div class="container-fluid py-5 px-4 text-lg-start  bg-primary  ">
        <div class="progress overflow-visible">
            <div class="progress-bar bg-white" role="progressbar" style="width:66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="bg-primary overflow-visible ">
                <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important;  color:white"></i>
            </div>
            <div class="progress-bar bg-primary progress-bar-striped border border-light border-opacity-10 " role="progressbar" style="width:33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="bg-primary overflow-visible ">
                <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important;  color:#41260c"></i>
            </div>


        </div>
    </div>

    <form action="index.php?aktion=registration4" method="post" id="addressForm">
        <div class="container align-items-center justify-content-center bg-white py-5 rounded-4">


            <div id="buttonFamily" class="row my-2 mx-5">
                <div class="col-lg-2 col-0"></div>
                <div class="col-lg-4 col-12 ">
                    <input class="btn btn-primary btn-lg" type="button" value="Add Family Member" onclick="createFamily()" />
                </div>
            </div>

            <div id="buttonOpes" class="row my-2 mx-5">
                <div class="col-lg-2 col-0"></div>
                <div class="col-lg-4 col-12 ">
                    <input class="btn btn-primary btn-lg" type="button" value="Add OPES credentials" onclick="createOPES()" id="buttonOpesbutton" />

                </div>
            </div>
            <div class="d-flex justify-content-center  col px-lg-0 w-100" id="submit">
                <input class="btn btn-primary btn-lg" type="submit" value="Skip" id="buttonSubmit"/>
            </div>

    </form>

</body>

</html>