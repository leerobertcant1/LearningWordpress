<?php get_header(); ?> 

<?php   
//Used for a single post.
    if(have_posts()):        
        while(have_posts()): the_post(); 
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php 
                if(has_post_thumbnail()):
            ?>  

            <div class="pull-right"><?php the_post_thumbnail('thumbnail') ?> </div>
            
            <?php 
                endif;
            ?>

            <small><?php the_category(' '); ?>|| <?php the_tags(); ?> || <?php edit_post_link() ?></small>
            <?php the_content(); ?>
            </article>
<?php   
        endwhile;
    endif;
?>
<hr>

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
    //Shows the comments template
    if(comments_open()) {
        comments_template();
    } else{
        echo '<h5 class="text-centre"> comments closed </h5>';
    }
?>

<?php get_footer(); ?>