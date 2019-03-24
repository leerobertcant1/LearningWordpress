<?php

/* Walker classes */

class Walker_Nav_Primary extends Walker_Nav_menu {
    //ampersand means maintain the information
    function start_lvl(&$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t", $depth); // Gets level of indentation
        $submenu = ($depth > 0)? ' sub-menu' : '';
        $output .= "\n". $indent . "<ul class =\"dropdown-menu" . $submenu. "depth" .$depth. "\">\n"; //Merge elements
    }

    /*function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){ // li a span
        $indent = ($depth)? str_repeat("\t", $depth) : '';
        $li_attributes = '';
        $class_names = $value = ''; 

        //Check classes of item
        $classes = empty($item->classes) ? array():(array) $item->classes;

        //Another level of array - dropdown default of bootstrap.
        $classes[] = ($args->walker->has_children) ? 'dropdown': '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active': '';
        $classes[] = 'menu-item' . $item->ID;

        if($depth && $args->walker->has_children){
            $classes[] = 'dropdown-submenu';
        }
       
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names).'"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen($id)? 'id="' . esc_attr($id). '"' : '';

        $output .= $indent .'<li' .$id .$value . $class_names . $li_attributes .'>'; 

        $attributes = !empty($item->attr_title) ? 'title=' .esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? 'target=' .esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->url)        ? 'href=' .esc_attr($item->url) . '"' : '';       
        $attributes .= !empty($args->walker->has_children) ? 'class="dropdown-toggle" data-toggle="dropdown"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->ID) . $args->link_after;
        $item_output .= ($depth == 0 && $args->walker->has_children) ? '<b class="caret></b></a>"': '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menj_start_el', $item_output, $item, $depth, $args);
    }*/

    //Not used here.
    /*function end_el(){ //closing li span

    }

    function end_lvl(){ // closing ul

    }*/
}