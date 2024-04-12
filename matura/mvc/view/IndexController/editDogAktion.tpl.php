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

<body>

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
          <input class="form-control h3" type="type" id="name" name="name" value="<?= $dog->getName()?>" required>
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-4 col-12">
          <label class="form-label h3" for="microchip">Microchip</label><br>
          <input class="form-control h3" type="type" id="microchip" name="microchip" value="<?= $dog->getMicrochip()?>" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class=" col-lg-2 col-0"></div>
        <div class="col-lg-4">
          <label class="form-label h3" for="breed">Breed</label><br>
          <input class="form-control h3" type="type" id="breed" name="breed" value="<?= $dog->getBreed()?>"required>
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-4 col-12 ">
          <label class="form-label h3" for="gender">Gender</label><br>
          <select class="form-select" aria-label="Default select example"  id="gender" name="gender" required >
            <option <?php if($dog->getId()==0){ ?>selected <?php }?> hidden value="">Choose one...</option >
            <option <?php if($dog->getGender()=="male"){ ?>selected <?php }?> value="male">Male</option>
            <option <?php if($dog->getGender()=="female"){ ?>selected <?php }?> value="female">Female</option>
          </select>
        </div>

      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 col-12 ">
          <label class="form-label h3" for="birthdate">Birthdate</label><br>
          <input class="form-control h3" type="date" id="birthdate" name="birthdate"value="<?=$dog->getBirthdate();?>" required>
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-4 col ">
          <label class="form-label h3" for="adoptionDate">Adoption date</label><br>
          <input class="form-control h3" type="date" id="adoptionDate" name="adoptionDate" value="<?= $dog->getAdoptionDate()?>" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2"></div>

        <div class="col-lg-3 col ">
          <label class="form-label h3" for="vet">Veterenarian</label><br>
          <input class="form-control h3" type="type" id="vet" name="vet" value="<?= $dog->getVet()?>" required>
        </div>
        <div class="col-lg-1 col-12 ">
          <label class="form-label h3" for="sterilized">Steralized</label><br>
          <input class="form-check-input h3 mx-lg-5" type="checkbox" id="sterilized" <?php if($dog->getSterilized()){ ?>checked <?php } ?> name="sterilized">
        </div>
        <div class="col-lg-1 col-0"></div>
        <div class="col-lg-4 col ">
          <label class="form-label h3" for="origin">Origin</label><br>
          <input class="form-control h3" type="type" id="origin" name="origin" value="<?= $dog->getOrigin()?>" required>
        </div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2"></div>
        <div class="col ">

          <label class="form-label h3" for="info">Info</label><br>
          <textarea class="form-control" id="info" name="info" rows="2" cols="50" ><?= $dog->getInfo()?></textarea>
        </div>
        <div class="col-lg-1 col-0"></div>
      </div>
      <div class="row my-2 mx-5">
        <div class="col-lg-2"></div>
        <div class="col ">

          <label class="form-label h3" for="behaviour">Behaviour</label><br>
          <textarea class="form-control" id="behaviour" name="behaviour" rows="2" cols="50"><?= $dog->getBehaviour()?></textarea>
        </div>
        <div class="col-lg-1 col-0"></div>
      </div>

      <input type="hidden" name="lid" value="getBrowserLang()">
      <input type="hidden" name="did" value="<?= $did ?>">

      <div class="d-flex justify-content-center  col px-lg-0 pt-4 w-100">
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