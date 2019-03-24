<?php get_header(); ?> <!-- Wordpress code to find header--->
<?php //get_sidebar(); ?> <!-- Wordpress searches for a sidebar name in this file by default--->

<h1> Test page</h1>
<?php 
    $argPaged = (get_query_var('paged')) ? (get_query_var('paged')) : 1;
    $argPosts = array('posts_per_page' => 2, 'paged' => $argPaged);
    query_posts($argPosts);

    //built in WP function, goes through posts.
    if(have_posts()):          
        while(have_posts()): the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>             
    
    <?php 
        endwhile;
    ?>

    <!-- Pagination --->
    <div class="text-left"> 
    <?php
        next_post_link('<- Olders Posts');
    ?>
    </div>

    <div class="text-right"> 
    <?php
        previous_post_link('Newer Posts ->');
    ?>
    </div>

    <?php
        wp_reset_query();

        endif;
    ?>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->