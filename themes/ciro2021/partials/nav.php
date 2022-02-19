<?php

// custom nav walker (to build our own navigation structure)
// NOTE: this won't be needed in most themes, but it's useful to have the structure here just in case
// There are articles that walk you through how to use it.  You can also refer to the Legacy Cabinets 
// theme, as it uses one.
class CCG_Walker extends Walker_Nav_Menu {
	// note: the '&' indicates that the variable is passed by reference
  
	// this would be used at the beginning of every element in the nav
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		// edit $output

	}
  
	// this closes each item in the nav
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		// edit $output
		
	}
  
	// this creates each sub-menu
	function start_lvl(&$output, $depth = 0, $args = array()) {
		// edit $output
		
	  
	}
  
	// this ends each sub-menu
	function end_lvl(&$output, $depth = 0, $args = array()) {
		// edit $output
		
	}
} // end walker class


