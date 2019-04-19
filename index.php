<?php
$eggs = rand(1, 3);

// Oskaras random egg image and eggs counting
if ($eggs == 1) {
    $easter_image = 'https://images.theconversation.com/files/116365/original/image-20160324-17851-1yv9q70.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip';
    $egg_count = 9;
    
} elseif ($eggs == 2) {
    $easter_image = 'https://www.whatsonnetwork.co.uk/uploads/800x600/b8cc6991a17a4f120bc6cb83163f826e.jpg';
    $egg_count = 20;
            
} else {
    $easter_image = 'https://whatsoninadelaide.net.au/wp-content/uploads/2019/02/Bunny-B.jpg';
    $egg_count = 20;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Condition</title>
        <meta charset="UTF-8">
        <style>
            html {
                background-image: url(https://i.pinimg.com/originals/52/96/7e/52967e9aee1c617cb0668d3ef1704eba.jpg);
          
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                flex-direction: column;
                align-items: center;
                min-height: 100vh;
                color: #fff;
            }
            
            .easter_img {
                background-image: url(<?php print $easter_image; ?>);
                width: 300px;
                height: 300px;
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            
            span {
                background: silver;
                color: #000;
                padding: 10px;
            }
           
        </style>
    </head>
    <body>
        
        <!-- THEbest start Oskaras index.php -->
        <h1>THEbest</h1>
        <div class="easter_img"></div>
        <span>Ar matai <?php print $egg_count; ?></span>
    </body>
</html><!-- alt + shift + f   oskarShop.lt-->