<?php get_header(); ?> 
<?php get_sidebar(); ?> 

<h1> Test page</h1>
<?php 
    if(have_posts()): 
?>     
    <header class="page-header">
<?php
        the_archive_title('<h1 class="page-title">','</h1>');
        the_archive_description('<div class="taxonomy-description"', '</div>');
?>
    </header>
    
<?php    
        while(have_posts()): the_post(); 
?>
    <?php 
        get_template_part('content', get_post_format());
        
        get_template_part('content', 'archive');
    ?>          
    <div>
    <?php 
        the_posts_navigation(); 
    ?>
    </div>
    
<?php 
        endwhile;
    endif;
?>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->