<?php get_header(); ?> <!-- Wordpress code to find header--->
<?php get_sidebar(); ?> <!-- Wordpress searches for a sidebar name in this file by default--->

<h1> Test page</h1>
<?php 
    //built in WP function, goes through posts.
    if(have_posts()):          
        while(have_posts()): the_post(); echo 'Post format: '. get_post_format(); ?>
            <?php get_template_part('content', get_post_format()); ?>             
    <?php 
        endwhile;
    endif;
    ?>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->