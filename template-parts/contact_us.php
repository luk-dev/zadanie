<?php
$heading = "Skontaktuj się z nami";
$subheading = "Zadzwoń <a href='tel:+48535015835'>+48 535 015 835</a> lub wypełnij formularz.";
?>
<div class="contact-us">
  <div class="container contact-us__container">
    <h2 class="contact-us__heading h1"><?php echo $heading; ?></h2>
    <span class="contact-us__subheading"><?php echo $subheading; ?></span>
    <div>
    <?php require "template-parts/components/form.php"; ?>
    </div>
  </div>
</div>