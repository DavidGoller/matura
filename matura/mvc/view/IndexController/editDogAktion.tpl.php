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

  <?php
    include("headerAktion.tpl.php");

    ?>
</head>

<body >

  <form name="myform" action="index.php?aktion=setDog" method="post" id="addressForm">

    <div class="border-primary border-3 container align-items-center justify-content-center bg-white py-5 rounded-4">
   
      <?php
      if ($warning != "") {
      ?>
        <div class="d-flex justify-content-center  col px-lg-0 w-100">
          <div class="alert alert-warning" role="alert">
            <?= $warning ?>
          </div>
        </div>

        <?php
      }
        ?>

          <div class="row my-2 mx-5">
            <div class=" col-lg-2 col-0"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3 " for="firstname">Firstname</label><br>
              <input class="form-control h3" type="type" id="firstname" name="firstname" required>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-4 col-12">
              <label class="form-label h3" for="lastname">Lastname</label><br>
              <input class="form-control h3" type="type" id="lastname" name="lastname" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class=" col-lg-2 col-0"></div>
            <div class="col-lg-9">
              <label class="form-label h3" for="codicefiscale">Codice fiscale</label><br>
              <input class="form-control h3" type="type" id="codicefiscale" name="codicefiscale" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3" for="email">E-mail</label><br>
              <input class="form-control h3" type="type" id="email" name="email" required>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-1 col-4">
              <label for="prefix" class="form-label h3">Prefix</label>
              <input class="form-control h3" list="prefixList" name="prefix" id="prefix" required>
              <datalist id="prefixList">
                <option value="+39">
                <option value="+49">
                <option value="+43">
                <option value="+41">
              </datalist>
            </div>
            <div class="col-lg-3 col ">
              <label class="form-label h3" for="phone">Phone</label><br>
              <input class="form-control h3" type="type" id="phone" name="phone" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2 col-0"></div>
            <div class="col-lg-4 col-12">
              <label class="form-label h3" for="password">Password</label><br>
              <input class="form-control h3" type="password" id="password" name="password" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2 col-0"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3" for="confirmpassword">Confirm Password</label><br>
              <input class="form-control h3" type="password" id="confirmpassword" name="confirmpassword" required>

            </div>
          </div>
          <input type="hidden" name="lid" value="getBrowserLang()">
          <input type="hidden" name="step" value=1>

          <div class="d-flex justify-content-center  col px-lg-0 w-100">
            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
          </div>
    

</div>

  </form>

</body>
<footer>
    <?php
    include("footerAktion.tpl.php");
    ?>
</footer>
</html>