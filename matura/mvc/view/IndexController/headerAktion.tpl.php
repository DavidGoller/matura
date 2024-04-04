<!doctype html>
<html lang="en">

<head>
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
<body>
  <div class=" bg-black ">
    <div class="container-fluid py-3 px-4 text-lg-start  bg-primary  ">
      <div class="row">
        <div class="col">
          <a href="index.php?aktion=headerbg">
            <img src="./rscr/img/Happy-Dogs logo.png" class="bg-primary img-thumbnail border-primary w-logo" alt="Happy-Dogs-Logo">
          </a>
        </div>

        <div class=" d-none d-lg-flex col-md-9 navbar float-end justify-content-end py-0 py-lg-2" style=" float:left">
          <div class="nav-item px-2 py-3">
            <div class="dropdown text-md-center " id="dropdown1" onmouseover="hoverDropdown(1)" onmouseleave="hoverOutDropdown(1)">
              <a class="btn  text-light" href="#" role="button">
                <p class="fs-6 topper">INFO</p>
              </a>
              <div class="dropdown-menu my-3 bg-primary dp">

                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=contactUs">CONTACT US</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=calander">CALANDER</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=whereAreWe">WHERE ARE WE</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=openingHours">OPENING HOURS</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=aboutUs">ABOUT US</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=licenseAndFormation">LICENSES AND FORMATION</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="?aktion=conditionsOfService">CONDITIONS OF SERVICE</a>
              </div>
            </div>
          </div>
          <div class="nav-item px-1 py-3">
          <div class="dropdown text-md-center " id="dropdown2" onmouseover="hoverDropdown(2)" onmouseleave="hoverOutDropdown(2)">
              <a class="btn  text-light" href="#" role="button">
                <p class="fs-6 topper">PROGRAMMI</p>
              </a>
              <!--
                PROGRAMMI IN SINTESI
                CONSULENZA E VALUTAZIONE
                PROGRAMMI EDUCAZIONE E PUPPY
                PROGRAMMI ATTIVITA SPORTIVE E LUDICHE 
              -->
              <div class="dropdown-menu  bg-primary my-1 dp">
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">PROGRAMMI IN SINTESI</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">CONSULENZA E VALUTAZIONE</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">PROGRAMMI EDUCAZIONE E PUPPY</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">PROGRAMMI ATTIVITA SPORTIVE E LUDICHE</a>
              </div>
            </div>
          </div>
          <div class="nav-item px-0   py-3">
          <div class="dropdown text-md-center " id="dropdown3" onmouseover="hoverDropdown(3)" onmouseleave="hoverOutDropdown(3)">
              <a class="btn text-light" href="#" role="button">
                <p class="fs-6 topper"> MODULI/FORMULARE</p>
              </a>
              <!-- 
                ISCRIZIONE
                ACCORDO DI SERVIZIO
                MODULO PER DIPLOMI OPES
                MODULO PER DIPLOMI OPES
              -->
              <div class="dropdown-menu  bg-primary my-1 dp">
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">ISCRIZIONE</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">ACCORDO DI SERVIZIO</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">MODULO PER DIPLOMI OPES</a>
                <a class="header-dp-item dropdown-item  bg-primary text-light" href="#">MODULO PER DIPLOMI OPES</a>
              </div>
            </div>
          </div>
          <div class="nav-item  px-0 mx-2  py-3">
            <div class="dropdown ">
              <a class="btn text-light" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                <p class="fs-6 topper">EVENTS</p>
              </a>
            </div>
          </div>
          <div class="nav-item  px-0 mx-2 py-3">
            <div class="dropdown ">
              <a class="btn  text-light" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                <p class="fs-6 topper">IN MEMORIAM</p>
              </a>
            </div>
          </div>
          <div class="nav-item  px-0 mx-2 py-2 pb-4">
            <?php if (!isset($_COOKIE["user"])) { ?>

              <div class="dropdown border-3 border-white border  ">
                <a class="btn  text-light" href="index.php?aktion=login" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                  <p class="mb-0 fs-6 topper">LOGIN</p>
                </a>
              </div>
            <?php } else { ?>
              <div class="dropdown">
                <a class="btn  text-light" href="index.php?aktion=userSettings&email=<?=json_decode($_COOKIE["user"])->email?>" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-solid fa-circle-user fa-2xl"></i>

                </a>
              </div>
            <?php } ?>
          </div>
        </div>
        <nav class="navbar navbar-dark d-flex d-lg-none  col-8 justify-content-end">

<button class="navbar-toggler custom-toggler active border-0 px-sm-4 px-0" onclick="reset(0)" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon "></span>
</button>
<div class="offcanvas offcanvas-end bg-dark w-50 fs-4  " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header" data-bs-theme="dark">
    <button type="button" class="btn-close custom-toggler" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Link</a>
      </li>
      <li class="nav-item dropdown" onclick="wrapper(1)">
        <a class="nav-link active dropdown-toggle" id="wrapper1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-animation="true">
          <i class="fa-solid fa-plus arrow"></i> Dropdown
        </a>
        <ul class="dropdown-menu bg-dark fs-4 border-0" data-bs-animation="true">
          <li><a class="dropdown-item text-white" href="#">Action</a></li>
          <li><a class="dropdown-item text-white" href="#">Another action</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown" onclick="wrapper(2)">
        <a class="nav-link active dropdown-toggle" id="wrapper2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-animation="true">
          <i class="fa-solid fa-plus arrow"></i> Dropdown
        </a>
        <ul class="dropdown-menu bg-primary border-0" data-bs-animation="true">
          <li><a class="dropdown-item text-white" href="#">Action</a></li>
          <li><a class="dropdown-item text-white" href="#">Another action</a></li>

        </ul>
      </li>
    </ul>


  </div>
</div>


</nav>
</div>


        </nav>
      </div>
    </div>

  </div>


</body>

</html>