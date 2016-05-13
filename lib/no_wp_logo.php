<?php

class NoWPLogo {
  function actions() {
    add_action('admin_bar_menu',[ $this, 'remove_from_admin_bar' ], 999);
  }

  function remove_from_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('wp-logo');
  }
}
