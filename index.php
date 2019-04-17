<?php
$taken = rand(1, 100);
$return_one = rand(101, 200);
$return_two = rand(301, 400);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h3>Jei paemei <?php print $taken; ?>EU</h3>
        <h3>Su dviem kabanciais grazinsi <?php print $return_two; ?></h3>
        <h3>Su vienu kabanciu grazinsi <?php $return_one; ?></h3>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->