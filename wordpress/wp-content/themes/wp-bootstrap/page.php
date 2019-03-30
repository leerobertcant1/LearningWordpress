Page.php 

<?php /*
    get_header(); 
?>
  <section class="showcase">
      <div class="container">
        <h1>
          Lee's Tyranids
        </h1>
        <p>
          This is a website to showcase my Tyranids.
        </p>
        <div class="dummy-btn-container">
          <a  class="btn btn-primary btn-lg">
            Lee's Tyranids
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
                <?php
                  the_title();
                ?>
            </h3>
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
            <hr>
          </div>
        </div>
    <?php 
        endwhile;
      endif;
    ?>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <i class="fa fa-users" aria-hidden="true"></i>
              <h3>
                HQ
              </h3>
              <p>
                HQ
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fa fa-gears" aria-hidden="true"></i>
              <h3>
                  Elites
              </h3>
              <p>
                  Elites
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fa fa-search" aria-hidden="true"></i>
              <h3>
                  Troops
              </h3>
              <p>
                  Troops
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fa fa-search" aria-hidden="true"></i>
              <h3>
                  Fast Attack
              </h3>
              <p>
              Fast Attack
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fa fa-search" aria-hidden="true"></i>
              <h3>
                  Heavy Support
              </h3>
              <p>
                  Heavy Support
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

 <?php 
    get_footer();
    */
 ?>