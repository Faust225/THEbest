<?php

function reached() {
    $siuskles_turis = 40;
    $siuskliu_turis_avg_per_day = 15;
    $max_kaupo_turis = rand(1, 10);

    $limit = ($max_kaupo_turis + $siuskles_turis); // max limit 
    $after_days = floor(($max_kaupo_turis + $siuskles_turis) / $siuskliu_turis_avg_per_day); // number of days to throw trash
    $thrash_per_days = $after_days * $siuskliu_turis_avg_per_day; // thresh count
    $space_left = $limit - $thrash_per_days; // free space left

    if ($space_left > 2) {
        print "Po $after_days d. prisirinko $thrash_per_days of $limit ";
    } else {
        print"Po $after_days dienu " . date("Y-m-d", strtotime("+ $after_days day"))
                . " pirk geliu ir sampano, jeigu nori, kad zmona siuksles pati isnestu"
                . ", nes prisirinko $thrash_per_days of $limit";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Siuksles</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php reached(); ?>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->