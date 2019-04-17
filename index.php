<!DOCTYPE html>
<html>
    <head>
        <title><?php
            // Komentarai
            date_default_timezone_set('Europe/Vilnius');

            print 'PHP lydes ir ' . date(mt_rand(2000, 2029), date("Y"));
            ?>
        </title>
        <meta charset="UTF-8">
    </head>
    <body style="background: rgb<?php print '(' . (mt_rand(0, 255)) . ',' . (mt_rand(0, 255)) . ',' . (mt_rand(0, 255)) . ')' . ';'; ?>">
        <h1 style="font-size: <?php print mt_rand(16, 30) . 'px;'; ?>">
            Oskaras - galbut turesiu
            <?php print " " . rand(1, 5) . ' vaiku'; ?>
        </h1>
        <p style="color: <?php print '#' . mt_rand(100, 999) . ';'; ?>">
            D. Trum'as nebebus prezidentu 
            <?php print date(mt_rand(2021, 2031), date("Y")) . '-' . date("m-d"); ?>
            <?php // As toks vienisas jaunas paragrafas... ?>
        </p>
        <p>
            <?php // Mindaugo svetimo kodo gatves d... ?>
        </p>

        <!-- Task 9 -->
        <img src="oneToSix/<?php print mt_rand(1, 6); ?>.png"><br>
        
        <?php
        
        // task 10 and 11
        $imgWidth = idate("s") + 300;
        $imgHeight = idate("s") + 250;

        if (idate("s") != 0) { 
        ?>
           <img src="bomb.jpg" width=" <?php print $imgWidth; ?> " height=" <?php print $imgHeight; ?>">
        <?php
            } else {
        ?>
                    <img src="explosion.jpg">
        <?php
                    }
        ?>
        <br>
        <?php print date("s");?>
        <br>
        <!-- Values -->
        <?php print "<br>"; 
        $string = 'dadwwad';
        $integer = 26;
        $floatas = 56.88;
        $bulas = false;
        $nera = null;
        
        print "$string stringas <br>" 
              . "$integer intas <br>" 
              . "$floatas floatas <br>" 
              . "$bulas boolas <br>" 
              . "$nera nullas <br>";
        $imgLoc = "explosion.jpg";
        ?>
        
        <img src="<?php print $imgLoc?>">
        <img src="<?php print $imgLoc?>">
        <img src="<?php print $imgLoc?>">
        <img src="<?php print $imgLoc?>">
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->