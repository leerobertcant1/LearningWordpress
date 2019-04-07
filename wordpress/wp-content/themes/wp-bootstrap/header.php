
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php  bloginfo('name') ?> |
            <?php is_front_page() ?  bloginfo('description') : wp_title(); ?>
    </title>
      
    <link href="<?php  bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php  bloginfo('stylesheet_url'); ?>"  rel="stylesheet" >

    <?php wp_head(); ?>
  </head>
  <body>

    <?php    
      global $BANNER_PAGE; 
      $BANNER_PAGE->setContextData();
    ?>
  
  <!-- Doesn't work in Stylesheet for some reason--->
  <section class="showcase-page" style="text-align:center; margin-top:5%;">
      <div class="container">
        <h1>
          Lee's Tyranids
        </h1>
      </div>
    </section>
    <hr>