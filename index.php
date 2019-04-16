<!DOCTYPE html>
<html>
    <head>
        <title>As, <?php // Komentarai
        print date("l", strtotime("2019-04-16 + 1 day"))
                . ' ir PHP'; ?>
        </title>
        <meta charset="UTF-8">
    </head>
    <body>
      
        <h1>  <?php // Dainu tekstai ?>
            Oskaras -
            <?php print" PHP su manim buvo ir "; ?>
            <?php print date("G", strtotime("5 - 1")) . ' valanda!' ?>
        </h1>
        <h2> <?php // Paragrafo daina ?> </h2>
        <p>
            <?php print date("Y", strtotime(" + 1 year")) . ' uz kalnu '; ?>
              <?php // As toks vienisas jaunas paragrafas... ?>
        </p>
        <p>
             <?php // Mindaugo svetimo kodo gatves... ?>
        </p>
    </body>
</html><!-- alt + shift + f -->