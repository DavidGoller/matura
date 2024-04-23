<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="./view/css/strapless.css" rel="stylesheet" />
  <link href="./view/css/style.css" rel="stylesheet" />


  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JavaScript -->
  <script src="./rscr/js/bootstrap.bundle.js"></script>
  <?php
  include("headerAktion.tpl.php");

  ?>
</head>

<body>

  <div class="container my-0 my-lg-5 px-lg-5 px-1">
    <iframe src="https://app.acuityscheduling.com/schedule.php?owner=32104311" title="Termin vereinbaren" width="100%" height="800" frameBorder="0"></iframe>
    <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
  </div>
</body>
<footer>
  <?php
  include("footerAktion.tpl.php");
  ?>
</footer>

</html>