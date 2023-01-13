<?php
$heading = "Obszary naszych kompetencji";
$content = "Pomagamy uczyć się na błędach innych. Wspieramy i rekomendujemy wartościowe rozwiązania biznesowe.";
?>
<section class="hero">
  <div class="container">
    <h1 class="hero__heading"><?php echo $heading; ?></h1>
    <span class="hero__subheading"><?php echo $content; ?></span>
    <?php require "template-parts/components/circle.php"; ?>
  </div>
</section>