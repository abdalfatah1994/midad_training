<?php
if ($_GET['username']) {
  $username = $_GET['username'];
}
if ($_GET['email']) {
  $email = $_GET['email'];
}
if ($_GET['age']) {
  $age = $_GET['age'];
}
if ($_GET['passwerd']) {
  $passwerd = $_GET['passwerd'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA_REQUEST</title>
</head>
<body>
  <h2 class="show_data">username : <?= $username ?></h2>        
  <h2 class="emaill">YOUR E-MAIL IS : ( <?= $email ?> )</h2>        
  <h2 class="show_data">your age is : <?= $age  ?>  YEARS</h2>        
  <h2 class="show_data">dont forget this passwerd<?= $passwerd ?></h2>        
</body>
</html>