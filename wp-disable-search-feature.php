// add this code to theme's functions.php

function wpb_filter_query( $query, $error = true ) {
  if ( is_search() ) {
  $query->is_search = false;
  $query->query_vars[s] = false;
  $query->query[s] = false;
  if ( $error == true )
  $query->is_404 = true;
  }
  }
  add_action( 'parse_query', 'wpb_filter_query' );
  add_filter( 'get_search_form', create_function( '$a', "return null;" ) );
  function remove_search_widget() {
      unregister_widget('WP_Widget_Search');
  }
  add_action( 'widgets_init', 'remove_search_widget' );
