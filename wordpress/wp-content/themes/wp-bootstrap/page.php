<?php 
    get_header(); 
?>
    <?php 
      if(have_posts()):
        while(have_posts()):the_post();
    ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
               <?php
                  the_title();
                ?>
            </h2>
              <?php 
                the_content();              
              ?>
            <hr>
            <div class="slug-post">
              <?php 
                global $post;           
                $slug_posts = new WP_Query(array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' =>  $post->post_name,
                                          ));

                foreach($slug_posts->posts as $slug_post):
              ?>
            <h3 class="blog-post-title">
              <?php
                  echo $slug_post->post_title;
              ?>
            </h3>
              <?php
                echo $slug_post->post_content;
              ?>
            <hr>
              <?php
                endforeach    
              ?>         
            </div>
          </div>
        </div>

        <?php
            $blogId = 16;
            $categories =  get_categories(array('exclude' => array($blogId), 'hide_empty' => 0,
                                            'orderby' => 'description', 'order' => 'ASC'));

            foreach($categories as $category):
        ?>
              <section class="boxes">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="box">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>
                          <?php 
                            echo $category->name;
                          ?>
                        </h3>
                        <p>
                          <?php
                            echo $category->name;
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
          </section>
    <?php 
          endforeach;
        endwhile;
      endif;
    ?>

 <?php 
    get_footer();
 ?>