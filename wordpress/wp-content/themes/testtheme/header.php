<!doctype html>
<html>
    <head>  
        <meta charset="utf-8">
        <title>
            Test theme
        </title>
        <?php wp_head(); ?> <!--Everything created here--->
    </head>

    <!-- Adds a search box --->
    <?php 
        get_search_form();
    ?>

    <!--Adds the page class name--->
    <?php 
    //Wordpress considers homepage as Blogs(is_home())
        //Front page is the custom front page
        if(is_front_page()):
            $pageClasses = array('test-home-class');
        else:
            $pageClasses = array('test-not-home-class');
        endif;
        ?>
    
    <body <?php body_class($pageClasses);?>>

    <img src ="<?php header_image(); ?>" height = "<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"alt="" />
    
    <?php wp_nav_menu(array('theme_location'=='test_hmenu')); ?>   <!--Loads menu here--->
    
    <div class='search-form-container'>
   
    </div>

    <!--Closed in next file that opened, footer.php--->