<?php
    //Needs to be unique otherwise could be duplicated in site
    function test_script_enqueue(){
        wp_enqueue_style('customstyle', get_template_directory_uri().'/css/test.css', array(), "1", 'all');
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/test.js', array(), "1", true);
    }
    
    //Adds a hook, each time Wordpress does something.
    add_action('wp_enqueue_scripts', 'test_script_enqueue');

    //Hook for menus
    function test_theme_setup(){
        add_theme_support('menus');

        register_nav_menu('test_hmenu', 'Test Header Navigation');
        register_nav_menu('test_fmenu', 'Test Footer Navigation');
    }

    add_action('init', 'test_theme_setup');

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'video'));
    add_theme_support('html5', array('search-form'));

    function test_widget_setup(){
        register_sidebar(array(
            'name'          => 'sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'sidebar-custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="%2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
    };

    add_action('widgets_init', 'test_widget_setup');

    
    require get_template_directory().'/inc/walker.php';


    /*function test_remove_version(){
        return '';
    }

    add_filter('the_generator', ' test_remove_version'); */


    function test_custom_post_type(){
        $labels = array(
            'name' => 'Custom Post Type',
            'singular_name' => ' Single Custom Post Type',
            'add_new' => 'Add Custom Post Item',
            'all_items' => 'All Items',
            'add_new_item' => 'Add Item',
            'edit_item' => 'Edit Item',
            'new_item' => 'New Item',
            'view_item' => 'View Item',
            'search_item' => 'Search Custom Page',
            'not_found' => 'No items',
            'not_found_in_trash' => 'No items in trash',
            'parent_item_colon' => 'Parent Item'
        );

        $supportsArray = array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'supports' => $supportsArray,
            'taxonomies' => array(
                'category',
                'post_tag'
            ),
            'menu_position' => 5,
            'exclude_from_search' => false
        );

        register_post_type('custom_post_type', $args);
    }

    add_action('init', 'test_custom_post_type');

        //Creates new taxonomies, labels related to Admin panel
        function test_custom_taxonomies(){
            $hierarchicalLabels = array(
                'name' => 'Fields',
                'singular_name' => 'Fields',
                'search_items' => 'Search Fields',
                'all_items' => 'All Fields',
                'parent_item' => 'Parent Fields',
                'parent_item_colon' => 'Parent Fields:',
                'edit_item' => 'Edit Fields',
                'update_item' => 'Update Fields',
                'add_new_item' => 'Add New Fields',
                'new_item_name' => 'New Fields Name',
                'menu_name' => 'Fields'
            );
    
            $hierarchicalArgs = array(
                'hierarchical' => true,
                'labels' => $hierarchicalLabels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'fields'
                )
            );   
            
            register_taxonomy('fields', array('custom-type-page'), $hierarchicalArgs);
              
            register_taxonomy('fieldsNh', array('custom-type-page-nh'), array(
                'label' => 'fieldsNh',
                'rewrite' => array('slug'=>'fieldsNh'),
                'hierarchical' => false
            ));

        }

        add_action('init', 'test_custom_taxonomies');


        function test_get_terms($postId, $term){
            $terms_list = wp_get_post_terms($postId, $term);
            $output = '';

            $i=0;
            foreach($terms_list as $term){
                $i++;

                //for the first item
                if(i > 1){
                    echo $output . ', ';
                    $output.= $term->name;
                }
             
                return $output;
            }
        }
    