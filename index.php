<?php
$age = 18;
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 Part 2 - Php</title>
  </head>
  <body>
<?php
if ($age >= 18) {
  ?>
  <p>Tu es majeur</p>
  <?php
}
 elseif ($age < 18) {
  ?>
  <p>Tu es mineur</p>
  <?php
}
 ?>
  </body>
</html>
