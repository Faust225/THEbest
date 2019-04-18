<?php
$distance = rand(1, 100);
$consumption = 7.5; // for 100 km
$price = 1.3; // EU for L
$money_in_hands = 100;

$used_fuel = round($distance * $consumption / 100, 2);
$trip_price = round($used_fuel * $price, 2);

$text = "Nuvaziavus $distance km "
        . "masina sunaudos $used_fuel l kuro "
        . "kaina: $trip_price EU";

if ($money_in_hands >= $trip_price) {
    $text_2 = 'Ok';
} else {
    $text_2 = ' Not ok';
}

// Sofa 
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if($grizai_velai == 1 && $grizai_isgeres == 1) {
    $late_return = 'miegosi and sofos, nes grizai velai ir isgeres ';
}
elseif ($grizai_velai == 0) {
    $late_return = 'niemiegosi ant sofos nes negrizai velai';
}
elseif ($grizai_isgeres == 0) {
    $late_return = 'nemiegosi and sofos nes negrizai isgeres';
}
elseif ($grizai_isgeres == 0 && $grizai_velai == 0) {
    $late_return = 'Nemiegosi ant sofos, nieko nepadarei';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Condition</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <p><?php print $text . " $text_2"; ?></p>
        <h1><?php  print $late_return;?><h1>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->