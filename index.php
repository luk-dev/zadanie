<?php
  $title_site = 'Zadanie';
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title_site; ?></title>
  <link type="text/css" rel="stylesheet" href="dist/css/app.css">
</head>
<body>
  <main role="main">
    <?php require "template-parts/hero.php"; ?>
    <?php require "template-parts/contact_us.php"; ?>
  </main>
  <script async src="dist/js/app.js"></script>
</body>
</html>