<?php
    get_header();

    $blogId = 16;
    $categories = get_categories(array(
                                'exclude'    => array($blogId),
                                'hide_empty' => 0,
                                'orderby'    => 'description',
                                'order'      => 'ASC') 
    );
?>
      <section class="showcase">
      <div class="container">
        <h1>
            <?php 
                bloginfo('name');  
            ?>     
        </h1>
        <p>
            <?php 
               
            ?>
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

    <section class="boxes">
      <div class="container">
        <div class="row">
            <?php 
                foreach($categories as $category):
            ?>
                <div class="col-md-4">
                    <div class="box">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <h3>
                        <?php
                            echo $category->cat_name;;
                        ?>
                      </h3>
                      <p>
                        <?php
                            echo $category->cat_name;
                        ?>
                      </p>
                    </div>
                  </div>
            <?php 
                endforeach;
            ?>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>