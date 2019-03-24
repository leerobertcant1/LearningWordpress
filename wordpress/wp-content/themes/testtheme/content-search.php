<?php get_header(); ?> 

<?php   
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

<?php get_footer(); ?>