<?php
$distance = rand(1, 100);
$consumption = 7.5; // for 100 km
$price = 1.3; // EU for L
$money_in_hands = 100;

$used_fuel = ($distance * $consumption) / 100;
$trip_price = $used_fuel * $price;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Condition</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php print 'Nuvaziavus ' . $distance . ' km ' .
                'masina sunaudos ' . round($used_fuel, 2) . ' l kuro ' .
                'kaina: ' . round($trip_price, 2) . ' EU';
        if($money_in_hands >= $trip_price) {
            print ' enought money for trip';
        }
        else {
            print ' not enought money';
        }
?>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->