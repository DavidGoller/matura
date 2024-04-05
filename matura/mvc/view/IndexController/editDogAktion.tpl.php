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
              <label class="form-label h3 " for="name">Dogname</label><br>
              <input class="form-control h3" type="type" id="name" name="name" required>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-4 col-12">
              <label class="form-label h3" for="microchip">Microchip</label><br>
              <input class="form-control h3" type="type" id="microchip" name="microchip" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class=" col-lg-2 col-0"></div>
            <div class="col-lg-9">
              <label class="form-label h3" for="breed">Breed</label><br>
              <input class="form-control h3" type="type" id="breed" name="breed" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3" for="birthdate">Birthdate</label><br>
              <input class="form-control h3" type="type" id="birthdate" name="birthdate" required>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-4 col ">
              <label class="form-label h3" for="adoption_date">Adoption date</label><br>
              <input class="form-control h3" type="type" id="adoption_date" name="adoption_date" required>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3" for="gender">Gender</label><br>
              <input class="form-control h3" type="type" id="gender" name="gender" required>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-4 col ">
              <label class="form-label h3" for="orgin">Oorginrgin</label><br>
              <input class="form-control h3" type="type" id="orgin" name="orgin" required>
            </div>
          </div>
          //!DIDNT FINISH
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