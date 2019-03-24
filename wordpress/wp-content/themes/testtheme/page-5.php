<?php get_header(); ?> <!-- Wordpress code to find header--->

<h2>Type: post & Post per page = 1</h2>
<?php 
//Uses queries to get the data.
    $lastPost = new WP_Query('type=post&posts_per_page=1');
    if($lastPost->have_posts()):          
        while($lastPost->have_posts()):  $lastPost->the_post(); echo 'Post format: '. get_post_format(); 
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>    
            <hr>         
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>


<h2> Basic post</h2>
<?php 
    //built in WP function, goes through posts.
    if(have_posts()):          
        while(have_posts()): the_post(); echo 'Post format: '. get_post_format(); 
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>   
            <hr>           
    <?php 
        endwhile;
    endif;
?>

<h2>Type: post & Post per page = -1(unlimited) & Cat = 1</h2>
<?php 
//Uses queries to get the data, catid gets the no categories.
    $otherPost = new WP_Query('type=post&posts_per_page=-1&cat=1');

    if($otherPost->have_posts()):          
        while($otherPost->have_posts()):  $otherPost->the_post(); echo 'Post format: '. get_post_format(); 
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>  
            <hr>           
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>

<h2>Type: post & Post per page = unlimited with arguments</h2>
<?php
//Can use array to pass stuff into instead.
    $args = array(
        'type' => 'post',
        'posts_per_page' => -1,
    );

    $otherPostArgs = new WP_Query($args);

    if($otherPostArgs->have_posts()):          
        while($otherPostArgs->have_posts()):  $otherPostArgs->the_post(); echo 'Post format: '. get_post_format(); 
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>  
            <hr>           
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->