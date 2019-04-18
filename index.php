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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Condition</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <p><?php print $text . " $text_2"; ?></p>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->