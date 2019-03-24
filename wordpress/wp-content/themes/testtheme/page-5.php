<?php get_header(); ?> <!-- Wordpress code to find header--->

<h2>Type: post & Post per page = 1</h2>
<?php 
//Uses queries to get the data.
    $lastPost = new WP_Query('type=post&posts_per_page=1');
    if($lastPost->have_posts()):          
        while($lastPost->have_posts()):  $lastPost->the_post();; 
?>
            <?php 
            //Looks for featured content, which is the featured file
                get_template_part('content', 'featured'); 
            ?>                        
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>
<hr> 


<h2> Basic post</h2>
<?php 
    //built in WP function, goes through posts.
    if(have_posts()):          
        while(have_posts()): the_post(); ; 
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>           
    <?php 
        endwhile;
    endif;
?>
<hr>

<h2>Type: post & Post per page = -1(unlimited) & Cat = 1</h2>
<?php 
//Uses queries to get the data, catid gets the no categories.
    $otherPost = new WP_Query('type=post&posts_per_page=-1&cat=1');

    if($otherPost->have_posts()):          
        while($otherPost->have_posts()):  $otherPost->the_post();  
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>           
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>
<hr>

<h2>Type: post & Post per page = unlimited with arguments</h2>
<?php
//Can use array to pass stuff into instead.
    $args = array(
        'type' => 'post',
        'posts_per_page' => -1,
    );

    $otherPostArgs = new WP_Query($args);

    if($otherPostArgs->have_posts()):          
        while($otherPostArgs->have_posts()):  $otherPostArgs->the_post();
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>                    
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>

<h2>Type: post & Post per page = unlimited & multiple categories with arguments</h2>
<?php
//Can use array to pass stuff into instead.
//Ids got from url in admin section
    $args = array(
        'type' => 'post',
        //'category__in' => array( 4, 5), -- cat id or not cat id
        'category__not_in' => array(10),
    );

    $otherPostArgsCats = new WP_Query($args);

    if($otherPostArgsCats->have_posts()):          
        while($otherPostArgsCats->have_posts()):  $otherPostArgsCats->the_post();
?>
            <?php 
                get_template_part('content', get_post_format()); 
            ?>  
                    
    <?php 
        endwhile;
    endif;

    //Removes the memory dump, like using in C sharp.
    wp_reset_postdata();
?>

<h2>Categories:</h2>

<?php 
    //args declared above
    $categories = get_categories($args);

    foreach($categories as $category):
        echo $category->name; 
?> 
<br>
<?php
    endforeach;
?> 
<hr>

<?php get_footer(); ?> <!-- Wordpress code to find footer--->