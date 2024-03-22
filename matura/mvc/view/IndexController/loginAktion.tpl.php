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
</head>

<body class="bg-primary">
  <section class="vh-100 bg-primary">
    <div class="container py-5 py-lg-5 py-md-0 h-100">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 pb-3 pb-md-0 text-center">
            <a href="index.php?aktion=home">
              <img src="./rscr/img/Happy-Dogs logo.png" class="bg-primary img-thumbnail border-primary w-logo" alt="Happy-Dogs-Logo">
            </a>
        </div>
      </div>  
      <div class="row d-flex justify-content-center align-items-center h-75">

        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

          <div class="card shadow-2-strong" style="border-radius: 1rem;">
          
            <div class="card-body py-md-2 p-lg-5 p-5 text-center">
                        <?php
      if ($warning != "") {
      ?>
        <div class="d-flex justify-content-center  col px-lg-0 w-100">
          <div class="alert alert-warning" role="alert">
            <?= $warning ?>
          </div>
        </div>

        <?php
      }?>
              <h3 class="mb-lg-5 mb-md-2 mb-5">Log in</h3>
              <form action="index.php?aktion=login" method="post">
                <div class="form-outline mb-4 mb-lg-4 mb-md-2">
                  <input type="email" id="typeEmailX-2" class="form-control form-control-lg" required  name="email" value="<?= $email?>"/>
                  <label class="form-label" for="typeEmailX-2">Email</label>
                </div>

                <div class="form-outline mb-4 mb-lg-4 mb-md-2">
                  <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required name="password"/>
                  <label class="form-label" for="typePasswordX-2">Password</label>
                </div>


                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
              </form>
              <hr class="my-4">
              <p>Don't have an Account?</p>
              <a href="index.php?aktion=registration"> Register here! </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>