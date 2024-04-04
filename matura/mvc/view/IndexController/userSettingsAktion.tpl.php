<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Settings</title>
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
</head>

<body class="bg-primary">
  <form name="myform" action="index.php?aktion=userSettings" method="post" id="addressForm" class="mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 pb-3 pb-md-0 text-center">
        <a href="index.php?aktion=home">
          <img src="./rscr/img/Happy-Dogs logo.png" class="bg-primary img-thumbnail border-primary w-logo" alt="Happy-Dogs-Logo">
        </a>
      </div>
    </div>
    <div class="container align-items-center justify-content-center bg-white my-3 py-5 rounded-4">
      <div class="mb-3">
        <label for="firstname" class="form-label">Vorname</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $user->getFirstname() ?>" required>

      </div>
      <div>
        <label for="lastname" class="form-label">Nachname</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $user->getLastname() ?>" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->getEmail(); ?>">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user->getPhone(); ?>">
      </div>
      <input type="hidden" id="user" name="user" value="<?=$user->getEmail() ?>">
      <div class="d-flex justify-content-center  col px-lg-0 w-100">
        <input class="btn btn-primary btn-lg" type="submit" value="Save Changes" />
      </div>
    </div>
  </form>

</body>

</html>