<?php get_header(); ?> 

<?php   
    if(have_posts()):        
        while(have_posts()): the_post(); 
?>         
        <?php 
            if(has_post_thumbnail()):
        ?>  

                <div class="pull-right">
                        <?php the_post_thumbnail('thumbnail') ?> 
                </div>
        
        <?php 
            endif;
        ?>

            <small>
                <?php the_category(' '); ?>|| <?php the_tags(); ?> || <?php edit_post_link() ?>
            </small>
            
            <?php the_excerpt(); ?>
<?php   
        endwhile;
    endif;
?>
<hr>

<?php get_footer(); ?>