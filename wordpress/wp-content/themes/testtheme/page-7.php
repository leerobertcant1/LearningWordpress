<?php 
/* 
    Template Name: Posts    
*/
    get_header(); 
?> 
<h1> Posts</h1>
<?php 
    if(have_posts()):        
        while(have_posts()): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
    <?php 
        endwhile;
    endif;
?>
<hr>
<?php get_footer(); ?>