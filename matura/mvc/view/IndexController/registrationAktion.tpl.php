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

<body class="bg-primary">
  <div class="container-fluid py-5 px-4 text-lg-start  bg-primary  ">
    <div class="progress overflow-visible">
      <div class="progress-bar bg-white" role="progressbar" style="width:<?= $step * 33 ?>%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="bg-primary overflow-visible ">
        <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important; margin-left: -1rem;  color:white"></i>
        <!--<img class="" src="progress.png"
          style="height: 300% !important; margin-top: -2rem; margin-left: -1.5rem; margin-right: -1.3rem;">-->
      </div>
      <?php for ($i = 1; $i < 4 - $step; $i++) {

      ?>
        <div class="progress-bar bg-primary progress-bar-striped border border-light border-opacity-10" role="progressbar" style="width:33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="bg-primary overflow-visible ">
          <!--<img class="" src="checkpoints.png" style="height: 300% !important; margin-top: -2rem; margin-left: -1.5rem;">-->
          <i class="fa-solid fa-dog fa-4x" style="height: 300% !important;margin-top: -2rem !important;  color:#41260c"></i>
        </div>
      <?php } ?>

    </div>
  </div>

  <form action="index.php?aktion=registration" method="post" id="addressForm">

    <div class="container align-items-center justify-content-center bg-white py-5 rounded-4">
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
      switch ($step) {
        case 0:

        ?>

          <div class="row my-2 mx-5">
            <div class=" col-lg-2 col-0"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3 " for="firstname">Firstname</label><br>
              <input class="form-control h3" type="type" id="firstname" name="firstname" required value=<?= $obj->getFirstname() ?>>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-4 col-12">
              <label class="form-label h3" for="lastname">Lastname</label><br>
              <input class="form-control h3" type="type" id="lastname" name="lastname" required value=<?= $obj->getLastname() ?>>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class=" col-lg-2 col-0"></div>
            <div class="col-lg-9">
              <label class="form-label h3" for="codicefiscale">Codice fiscale</label><br>
              <input class="form-control h3" type="type" id="codicefiscale" name="codicefiscale" required value=<?= $obj->getCodicefiscale() ?>>
            </div>
          </div>
          <div class="row my-2 mx-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-12 ">
              <label class="form-label h3" for="email">E-mail</label><br>
              <input class="form-control h3" type="type" id="email" name="email" required value=<?= $obj->getEmail() ?>>
            </div>
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-1 col-4">
              <label for="prefix" class="form-label h3">Prefix</label>
              <input class="form-control h3" list="prefixList" name="prefix" id="prefix" required value=<?= $prefix ?>>
              <datalist id="prefixList">
                <option value="+39">
                <option value="+49">
                <option value="+43">
                <option value="+41">
              </datalist>
            </div>
            <div class="col-lg-3 col ">
              <label class="form-label h3" for="phone">Phone</label><br>
              <input class="form-control h3" type="type" id="phone" name="phone" required value=<?= $phone ?>>
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
          <input type="hidden" name="step" value=1>

          <div class="d-flex justify-content-center  col px-lg-0 w-100">
            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
          </div>
    </div>
  <?php ;
          break;
        case 1:
         
  ?>
    <input type="hidden" name="obj" value=<?= $obj ?>>

    <input type="hidden" name="step" value=2>
    <div class="row my-2 mx-5">
      <div class=" col-lg-2 col-0"></div>
      <label class="form-label h3 col">Address</label>
    </div>
    <?php $addresses[0]->removeNbsp()?>
    <div class="row my-2 mx-5">
      <div class=" col-lg-2 col-0"></div>
      <div class="col-lg-4 col-12 ">
        <label class="form-label h3">Country</label><br>
        <input class="form-control h3" type="type" name="country[]" value="<?=$addresses[0]->getCountry()?>" required>
      </div>
      <div class="col-lg-1 col-0"></div>
      <div class="col-lg-4 col-12">
        <label class="form-label h3">Province</label><br>
        <input class="form-control h3" type="type" name="province[]" value="<?=$addresses[0]->getProvince()?>" required>
      </div>

    </div>
    <div class="row my-2 mx-5">
      <div class="col-lg-2"></div>
      <div class="col-lg-4 col-12 ">
        <label class="form-label h3">City</label><br>
        <input class="form-control h3" type="type" name="city[]" value="<?=$addresses[0]->getCity()?>" required>
      </div>
      <div class="col-lg-1 col-0"></div>
      <div class="col-lg-4 col ">
        <label class="form-label h3">Postcode</label><br>
        <input class="form-control h3" type="type" name="postcode[]"  value="<?=$postcode?>"required>
      </div>
    </div>
    <div class="row my-2 mx-5">
      <div class="col-lg-2 col-0"></div>
      <div class="col-lg-4 col-12">
        <label class="form-label h3">Address</label><br>
        <input class="form-control h3" type="type" name="address[]"  value="<?=$addresses[0]->getAddress()?>"required>
      </div>
    </div>
    <div id="createButton" class="row my-2 mx-5">
      <div class="col-lg-2 col-0"></div>
      <div class="col-lg-4 col-12 ">
        <input class="btn btn-primary btn-lg" type="button" value="+" onclick="createNewAddress()" />

      </div>
    </div>
    <div class="d-flex justify-content-center  col px-lg-0 w-100" id="submit">
      <input class="btn btn-primary btn-lg" type="submit" value="Submit" id="buttonSubmit" />
    </div>
  <?php ;
          break;
        case 2:
  ?>
  <?php 
    foreach ($addresses as $address) {?>
    <input type="hidden" name="addresses[]" value=<?= $address?>/>
    <?php }
  ?>
    <input type="hidden" name="obj" value=<?= $obj ?>>
    <input type="hidden" name="step" value=3>
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
      <input class="btn btn-primary btn-lg" type="submit" value="Skip" id="buttonSubmit" />
    </div>
  <?php ;
          break;
        case 3:
  ?>
    <?php
    //TODO DATABASE INSERT
    echo($obj . "</br>");
    foreach ($addresses as $address) {
      echo($address . "</br>");
    }
    foreach ($family as $member) {
      echo($member . "</br>");
    }
    echo ($opes . "</br>");
    ?>
    <div class="row">
      <div class="col-lg-4 col-0"></div>
      <div class="col-lg-4 col-12 justify-content-center py-5 bg-primary text-center rounded-3">
        <p class="h1 text-white"> Registration complete </p>
        <br>
        <p class="h1 text-white"> Well done! </p>

        <i class="fa-solid fa-check fa-beat fa-4x text-white text-center"></i>
      </div>

    </div>
<?php ;
          break;
      }
?>

</div>
  </form>

</body>

</html>