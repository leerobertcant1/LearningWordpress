Index.php



<?php 

$test = 'test';

/*
    get_header(); 
?>

<!-- 
  TO DO:

    1) Get pictures of all models (headshots for the footer links).
    2) Create a page for each Force Organisation area (perhaps inside
        dropdown buttons or something).
    3) Do a write up on the painting section(s) for each one.
          - These could be as posts.
          - When clicked pass through id - If the Top level show all posts under that category.
    4) Style the header to maybe have sub menus - which will take
      to the bit on that page [Perhaps later look at own pages].
    5) Re-style website to look Tyranidy, look at images for banners
      and backgrounds.
    6) Check Games Workshops' legal policy.
    7) Perhaps an 'About Me' page?

  --->

 


  <section class="showcase">
      <div class="container">
        <h1>
        <?php 
               bloginfo('name');  
            ?> 
        </h1>
        <p>
          
        </p>
        <div class="dummy-btn-container">
          <a  class="btn btn-primary btn-lg">
          <?php 
                bloginfo('name');  
            ?> 
          </a>
        </div>    
      </div>
    </section>

    <?php 
      if(have_posts()):
        while(have_posts()):the_post();
    ?>
          <div class="blog-post">
            <h3 class="blog-post-title">
              <a class ="blog-link" href = "
                          <?php 
                         //   the_permalink();
                          ?>">
                <?php
                  the_title();
                ?>
              </a>
            </h3>

            <p class="blog-post-meta">
              <?php 
                the_time('F j, Y - g:i a.');
              ?>
            </p>
            <blockquote>
            By <a class="blog-author-link" href = "
                           <?php 
                              get_author_posts_url(get_the_author_meta('ID'));
                            ?>
                         ">
                          <?php
                           the_author();
                          ?>
                </a>
            </blockquote>
            <?php
               if(has_post_thumbnail()):              
            ?>
              <div class="post-thumb">
                <?php
                  the_post_thumbnail();
                ?>            
              </div>
            <?php
               endif;
            ?>
            <hr>
          </div>
        </div>
    <?php 
        endwhile;
      endif;
    ?>

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php 
        if(is_active_sidebar('sidebar')):
            $sideBar = dynamic_sidebar('sidebar');
        endif;
      ?>
    </div> 

 <?php 
    get_footer();
    */
 ?>