<!DOCTYPE html>
<html lang="<?php 
                    language_attributes(); 
            ?>"
>
  <head>
    <meta charset="<?php 
                        bloginfo('charset'); 
                    ?>">
    <title><?php 
                bloginfo('name') 
            ?> |
            <?php 
                is_front_page() ? 
                                bloginfo('description') 
                                : wp_title();
            ?>
    </title>
      
    <link href="<?php 
                    bloginfo('template_url'); 
                ?>
                /css/bootstrap.css" rel="stylesheet">
    <link href="<?php 
                    bloginfo('stylesheet_url'); 
                ?>" 
                rel="stylesheet"
    >
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        <?php
          $menuLocations = get_nav_menu_locations(); 
          $menuID = $menuLocations['primary']; 
          $primaryNav = wp_get_nav_menu_items($menuID); 

          $aClass = 'blog-nav-item';

          for($counter = 0; $counter < count($primaryNav); $counter++){          
            if($counter == 0) {
              $aClass .= ' active';
            }
            else if($counter == 1){
              $aClass = str_replace(' active', '', $aClass);
            }

            echo '<a class="'.$aClass.'" href="'.$primaryNav[$counter ]->url.'" title="'.$primaryNav[$counter ]->title.'">'.$primaryNav[$counter ]->title.'</a>';
          }
        ?>        
        </nav>
      </div>
    </div>

  