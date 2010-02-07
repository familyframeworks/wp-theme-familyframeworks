<?php

class private_pages_widget extends WP_Widget {
  function private_pages_widget() {
    $currentLocale = get_locale();
    if(!empty($currentLocale)) {
      $moFile = dirname(__FILE__) . "/languages/private_pages_widget_" .  $currentLocale . ".mo";
      if(@file_exists($moFile) && is_readable($moFile)) load_textdomain('', $moFile);
    }
    $private_pages_widget_name = __('FFW Logged on Widget', 'private-pages-widget');
    $private_pages_widget_description = __('Displays links for the Family Frameworks staff members to use while on the site.', 'private-pages-widget');
    $widget_ops = array('classname' => 'private_pages_widget', 'description' => $private_pages_widget_description );
    $this->WP_Widget('private_pages_widget', $private_pages_widget_name, $widget_ops);
  }  
  
  function widget($args, $instance) {
    if ( is_user_logged_in() ) { 
      ?>
      <div class='widget bookmarks widget-bookmarks'>
        <div style="background:#BC0B0B;color:#fff;width:100%;text-align:center;">
          <h2>You are Logged in!</h2>
        </div>
        <ul>
        <li class="page_item private-page-1">
          <a href="http://www.google.com/calendar/renderOnline">Calendar</a>
        </li>
        <li class="page_item private-page-2">
          <a href="https://mail.mattrude.com/roundcube/">Web Mail</a>
        </li>
        <li class="page_item private-page-3">
          <a href="<?php bloginfo('url'); ?>/wp-admin/">Admin Dashboard</a>
        </li>
        <li class="page_item private-page-4">
	  <?php edit_post_link('Edit this page'); ?>
        </li>
        <li class="page_item private-page-5">
          <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>
        </li>
        </ul>
      </div>
      <?php
    }
  }
  
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['gallery_category'] = strip_tags($new_instance['gallery_category']);
    return $instance;
  }
  
  function form($instance) {
  }
}

add_action('widgets_init', 'private_pages_widget_init');
function private_pages_widget_init() {
        register_widget('private_pages_widget');
}

?>
