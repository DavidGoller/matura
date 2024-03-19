<!doctype html>
<html lang="en">

<head>
  <title>HeaderTamplateBG</title>
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

  <!--WhatsApp Iframe-->
  <script defer src="https://widget.tochat.be/bundle.js?key=9c600faf-71c1-4b48-b534-4e2363075c39"></script>


  <div class=" position-relative" style="overflow:hidden !important">
    <img src="./rscr/img/bg.png" class="position-absolute bg-opacity-25" style="width: 100% !important; overflow:hidden !important;" />
    <div class="container-fluid py-3 px-4 text-md-start banner" >

      <div class="row">
        <div class="col">
          <img src="./rscr/img/Happy-Dogs logo.png" class="img-thumbnail position-relative bg-transparent border-0  w-logo" alt="Happy-Dogs-Logo">
        </div>

        <div class=" d-none d-lg-flex col-md-9 navbar float-end justify-content-end py-0 py-lg-2" style=" float:left">
          <div class="nav-item px-2 py-3">
            <div class="dropdown text-md-center " id="dropdown1" onmouseover="hoverDropdown(1)" onmouseleave="hoverOutDropdown(1)">
              <a class="btn  text-light" href="#" role="button">
                <h6>INFO</h6>
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
                <h6>PROGRAMMI</h6>
              </a>
              <!--
                PROGRAMMI IN SINTESI
                CONSULENZA E VALUTAZIONE
                PROGRAMMI EDUCAZIONE E PUPPY
                PROGRAMMI ATTIVITA SPORTIVE E LUDICHE 
              -->
              <div class="dropdown-menu  bg-primary my-3 dp">
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
                <h6> MODULI/FORMULARE</h6>
              </a>
              <!-- 
                ISCRIZIONE
                ACCORDO DI SERVIZIO
                MODULO PER DIPLOMI OPES
                MODULO PER DIPLOMI OPES
              -->
              <div class="dropdown-menu  bg-primary my-3 dp">
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
                <h6>EVENTS</h6>
              </a>
            </div>
          </div>
          <div class="nav-item  px-0 mx-2 py-3">
            <div class="dropdown ">
              <a class="btn  text-light" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                <h6>IN MEMORIAM</h6>
              </a>
            </div>
          </div>
          <div class="nav-item  px-0 mx-2 py-3 pb-4">
            <?php if (!isset($_COOKIE["user"])) { ?>

              <div class="dropdown border-3 border-white border  ">
                <a class="btn  text-light" href="index.php?aktion=login" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                  <h6 class="mb-0">LOGIN</h6>
                </a>
              </div>
            <?php } else { ?>
              <div class="dropdown">
                <a class="btn  text-light" href="index.php?aktion=userSettings" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
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
      <div class=" row bg-black  text-md-start  position-relative bg-transparent title" >
        <p class=" fst-italic fs-4 text-center text-white  opacity-100 pt-0 pt-lg-3">centro cinofilo</p>
      </div>
      <div class=" row bg-black pb-4 pt-1 px-4 text-md-start  position-relative bg-transparent">
        <h1 class="  text-center text-white display-1 fw-bold opacity-100">HAPPY DOGS</h1>
      </div>
    </div>

  </div>
</head>

<body>

</body>
<footer>
</footer>

</html>