<!doctype html>
<html lang="en">

<head>
<title>Register1</title>
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
  <div class="container-fluid py-5 px-4 text-lg-start  bg-primary  ">
    <div class="progress overflow-visible">
      <div class="progress-bar bg-white" role="progressbar" style="width: 0%" aria-valuenow="66" aria-valuemin="0"
        aria-valuemax="100"></div>
      <div class="bg-primary overflow-visible ">
        <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important; margin-left: -1rem;  color:white" ></i>
        <!--<img class="" src="progress.png"
          style="height: 300% !important; margin-top: -2rem; margin-left: -1.5rem; margin-right: -1.3rem;">-->
      </div>
      <div class="progress-bar bg-primary progress-bar-striped border border-light border-opacity-10" role="progressbar" style="width:33%" aria-valuenow="33"
        aria-valuemin="0" aria-valuemax="100"></div>
      <div class="bg-primary overflow-visible ">
        <!--<img class="" src="checkpoints.png" style="height: 300% !important; margin-top: -2rem; margin-left: -1.5rem;">-->
        <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important;  color:#41260c" ></i>
      </div>
      <div class="progress-bar bg-primary progress-bar-striped border border-light border-opacity-10" role="progressbar" style="width:33%" aria-valuenow="33"
        aria-valuemin="0" aria-valuemax="100"></div>
      <div class="bg-primary overflow-visible ">
        <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important; color:#41260c" ></i>
      </div>
      <div class="progress-bar bg-primary progress-bar-striped border border-light border-opacity-10 " role="progressbar" style="width:33%" aria-valuenow="33"
        aria-valuemin="0" aria-valuemax="100"></div>
      <div class="bg-primary overflow-visible ">
        <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important;  color:#41260c" ></i>
      </div>

    </div>
  </div>

  <form action="index.php?aktion=registration" method="post">
    <div class="container align-items-center justify-content-center bg-white py-5">
      <div class="row my-2 mx-5">
        <div class=" col-lg-2 col-0"></div>
        <div class="col-lg-4 col-12 ">
          <label class="form-label h3 " for="firstname">Firstname</label><br>
          <input class="form-control h3" type="type" id="firstname" name="firstname" placeholder="firstname" required>
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-4 col-12">
          <label class="form-label h3" for="lastname">Lastname</label><br>
          <input class="form-control h3" type="type" id="lastname" name="lastname" placeholder="lastname" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class=" col-lg-2 col-0"></div>
        <div class="col-lg-9">
          <label class="form-label h3" for="codicefiscale">Codice fiscale</label><br>
          <input class="form-control h3" type="type" id="codicefiscale" name="codicefiscale" placeholder="codicefiscale" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 col-12 ">
          <label class="form-label h3" for="email">E-mail</label><br>
          <input class="form-control h3" type="type" id="email" name="email" placeholder="example@happydogs.it" required>
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-1 col-4">
          <label for="prefix" class="form-label h3">Prefix</label>
          <input class="form-control h3" list="prefixList" id="prefix" placeholder="+" required>
          <datalist id="prefixList">
            <option value="+39">
            <option value="+49">
            <option value="+43">
            <option value="+41">
          </datalist>
        </div>
        <div class="col-lg-3 col ">
          <label class="form-label h3" for="phone">Phone</label><br>
          <input class="form-control h3" type="type" id="phone"name="phone" placeholder="1234567891" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2 col-0"></div>
        <div class="col-lg-4 col-12">
          <label class="form-label h3" for="password">Password</label><br>
          <input class="form-control h3" type="password" id="password" name="password" placeholder="password" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2 col-0"></div>
        <div class="col-lg-4 col-12 ">
          <label class="form-label h3" for="confirmpassword">Confirm Password</label><br>
          <input class="form-control h3" type="password" id="confirmpassword" name="confirmpassword" placeholder="password" required>
          
        </div>
      </div>
      <div class="row my-3 mx-lg-0 mx-5">
        <div class="col-lg-6 col-0 "></div>
        <div class="col px-lg-0">
          <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
        </div>
      </div>
    </div>
  </form>

</body>

</html>