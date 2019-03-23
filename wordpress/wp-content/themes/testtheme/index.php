<?php get_header(); ?> <!-- Wordpress code to find header--->
    <h1> Test page</h1>
    <?php 
        //built in WP function, goes through posts.
        if(have_posts()):          
            while(have_posts()): the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <!--Mix Wordpress functions with html to display stuff that is stored in the database.--->
                <!--The blogs are all set the settings, reading section--->
                <small> Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in: <?php the_category();?></small>
                <p><?php the_content(); ?></p>
                <hr>
        <?php 
            endwhile;
        endif;
        ?>
<?php get_footer(); ?> <!-- Wordpress code to find footer--->