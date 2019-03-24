<?php

/* Walker classes */

class Walker_Nav_Primary extends Walker_Nav_menu {
    //ampersand means maintain the information
    function start_lvl(&$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t", $depth); // Gets level of indentation
        $submenu = ($depth > 0)? ' sub-menu' : '';
        $output .= "\n$indent<ul class =\"dropdown-menu$submenu depth$depth\">\n>"; //Merge elements
    }

    //function start_el(){ // li a span

    //}

    //Not used here.
    /*function end_el(){ //closing li span

    }

    function end_lvl(){ // closing ul

    }*/
}