<?php 
    //********** INITIAL SETUP **********

    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    } 

    add_action('after_setup_theme','wpb_theme_setup');

    function wpb_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget'=> '<div class="sidebar-module>"',
            'after_widget'=> '</div>"',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');

    //********** INITIAL SETUP ENDS **********




    //********** TIMBER CODE **********

    class StarterSite extends Timber\Site {
        public function __construct() {
            add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
            add_filter( 'timber/context', array( $this, 'add_to_context' ) );
            add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
            add_action( 'init', array( $this, 'register_post_types' ) );
            add_action( 'init', array( $this, 'register_taxonomies' ) );
            parent::__construct();
        }
        public function register_post_types() {
    
        }
        public function register_taxonomies() {
    
        }
    
        public function add_to_context( $context ) {
            $context['posts'] = Timber::get_posts();
            $context['menu'] = new Timber\Menu();
            $context['site'] = $this;
            $context['wp_head'] = wp_head();
            
            return $context;
        }
    
        public function theme_supports() {
            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );
    
            add_theme_support( 'title-tag' );
    
            add_theme_support( 'post-thumbnails' );
    
            add_theme_support(
                'html5', array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption'
                )
            );
    
            add_theme_support(
                'post-formats', array(
                    'aside',
                    'image',
                    'video',
                    'quote',
                    'link',
                    'gallery',
                    'audio',
                )
            );
    
            add_theme_support( 'menus' );
        }
    
        public function add_to_twig( $twig ) {
            $twig->addExtension( new Twig_Extension_StringLoader() );
            $twig->addFilter( new Twig_SimpleFilter( 'myfoo', array( $this, 'myfoo' ) ) );
            return $twig;
        }
    }
    
    new StarterSite(); 

    //********** TIMBER CODE ENDS **********



    //********** PAGE CLASSES **********

    class bannerPage{
        private function getPrimaryNavData(){
            $menuLocations = get_nav_menu_locations(); 
            $menuID = $menuLocations['primary']; 
            return wp_get_nav_menu_items($menuID);
        }

        function setContextData(){
            $navData = $this->getPrimaryNavData();

            $context = Timber::get_context();
            $context['primary_nav_items'] =  $navData;
            
            Timber::render('banner.twig', $context);
        }
    }

    global $BANNER_PAGE;
    $BANNER_PAGE = new bannerPage();

    class frontPage{
        private function getCategoryData(){
            $blogId = 16;
            return get_categories(array('exclude' => array($blogId), 'hide_empty' => 0,
                                            'orderby' => 'description', 'order' => 'ASC'));
        }
    
        function setContextData(){
            $categories = $this->getCategoryData();
        
            $context = Timber::get_context();
            $context['categories'] = $categories;
            $context['blog_info_name'] = strip_tags(get_bloginfo('name'));
            
            Timber::render('showcase-section.twig', $context);
            Timber::render('category-boxes.twig', $context);
        }
    }

    global $FRONT_PAGE;
    $FRONT_PAGE = new frontPage();


    class initialHtml{

        
    }
   

    //********** PAGE CLASSES ENDS **********