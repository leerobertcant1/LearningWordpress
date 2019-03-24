<!doctype html>
<html <?php language_attributes(); ?>>
    <head>  
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
            <?php bloginfo('name'); ?>
            <?php wp_title('|'); ?>
        </title>
        <meta name="description" content ="<?php bloginfo('description'); ?>">
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
    
    <?php 
        wp_nav_menu(
        array(
            'theme_location'=>'test_hmenu',
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new Walker_Nav_Primary()
            )
        ); 
    ?>   <!--Loads menu here--->
    
    <div class='search-form-container'>
   
    </div>

    <!--Closed in next file that opened, footer.php--->