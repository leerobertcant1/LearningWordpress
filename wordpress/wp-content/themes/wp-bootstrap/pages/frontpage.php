
  public class frontPage{
    function getCategoryData(){
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