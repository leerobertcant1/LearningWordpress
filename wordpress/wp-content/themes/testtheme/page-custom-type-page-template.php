<?php get_header(); ?> 

<h1> Test page</h1>
<?php 

    $args = array(
        'post_type' => 'custom-type-page',
        'post_per_page' => 3
    );

    $loop = new WP_Query($args);

    if($loop->have_posts()):          
        while($loop->have_posts()): $loop->the_post(); 

            
?>
    
    <?php 
        endwhile;
    endif;
    ?>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->