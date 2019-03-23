<!doctype html>
<html>
    <head>  
        <meta charset="utf-8">
        <title>
            Test theme!
        </title>
        <?php wp_head(); ?> <!--Everything created here--->
    </head>
    <body>
    <?php wp_nav_menu(array('theme_location' =>' test_hmenu')); ?>   <!--Loads menu here--->

    <!--Closed in next file that opened, footer.php--->

