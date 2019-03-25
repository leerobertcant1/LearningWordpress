<?php
 get_header();
?>

    <div id="primary404" class="container">
        <main class = "site-main" role="main"> 
            <!-- Wordpress classes --->
            <section class="error-404 not-found">
                <head class="page-header">
                    <h1 class="page-title">
                        Page does not exist.
                    </h1>
                </head>

                <div class="page-content">
                    <h3>
                        Nothing found here.
                    </h3>

                <?php 
                    get_search_form();
                ?>

                <?php 
                    the_widget('WP_Widget_Recent_Posts');
                ?>

                    <div class="widget widget_categories">
                        <h3>
                            Most used categories
                        </h3>
                        <ul>

                        <?php 
                            wp_list_categories( array(
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'show_count' => 1,
                                'title_li' => '',
                                'number' => 2
                            ));
                        ?>

                        </ul>
                    </div>

                <?php 
                    the_widget('WP_Widget_Recent_Archives', 'dropdown=1', 'after_title=</h2>'.$archive_content);
                ?>
                </div>
            </section>
        </main>
    </div>

<?php
 get_footer();
?>