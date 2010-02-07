<?php
require_once('functions/control-panel.php');
require_once('base/base.php');
require_once('functions/colored-posts-wiget.php');
require_once('functions/private-pages.php');

if(function_exists('register_sidebar'))
//	register_sidebar(array (
//		'name' => 'Left Sidebar',
//		'before_widget' => '<div class="widget bookmarks widget-bookmarks">',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//	));
	register_sidebar(array (
		'name' => 'Right Sidebar',
		'before_widget' => '<div class="widget bookmarks widget-bookmarks">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
function new_excerpt_length($length) {
        return 25;
}
// Add Custom User Contact Methods
function add_twitter_contactmethod( $contactmethods ) {

  // Add Facebook & Twitter support
  $contactmethods['facebook'] = 'Facebook URL';
  $contactmethods['twitter'] = 'Twitter ID';
 
  // Remove Yahoo IM, AOL IM, & Jabber
  unset($contactmethods['aim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['yim']);
 
  return $contactmethods;
}
add_filter('user_contactmethods','add_twitter_contactmethod',10,1);

/**
 * add a default-gravatar to options
 */
if ( !function_exists('fb_addgravatar') ) {
	function fb_addgravatar( $avatar_defaults ) {
		$myavatar = get_bloginfo('template_directory') . '/images/ff_logo_only-1.png';
		$avatar_defaults[$myavatar] = 'Family Frameworks';
 
		return $avatar_defaults;
	}
 
	add_filter( 'avatar_defaults', 'fb_addgravatar' );
}

//hook the administrative header output
add_action('admin_head', 'ff_custom_logo');

function ff_custom_logo() {
  echo '
  <style type="text/css">
  #header-logo { background-image: url('.get_bloginfo('template_directory').'/images/ff_logo_only-2.png) !important; }
  </style>
  ';
}

// Adds robots.txt support
$defaultrobotstxt = "# This is the default robots.txt file
User-agent: *
Allow: /
";

add_option("robots_txt", $defaultrobotstxt, "Contents of robots.txt", 'no');		// default value

function robots_txt(){
	$request = str_replace( get_bloginfo('url'), '', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] );

	if ( (get_bloginfo('url').'/robots.txt' != 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) && ('/robots.txt' != $_SERVER['REQUEST_URI']) && ('robots.txt' != $_SERVER['REQUEST_URI']) )
		return;		// checking whether they're requesting robots.txt
	
	$robotstxt_out = get_option('robots_txt');
	
	if ( !$robotstxt_out)
		return;

	header('Content-type: text/plain');
	print $robotstxt_out;
	die;
}

$Options =
array
(
	array
	(
		'Type'=>'Title',
		'Value'=>'General Settings'
	),
	array
	(
		'Type'=>'TextArea',
		'ID'=>'AddressText',
		'Label'=>'<strong>Address Text</strong>',
		'Description' => 'Displays the Address on the bottom of ever page.'
	),
	array
	(
		Type=>'End'
	),
	array
	(
		'Type'=>'Title',
		'Value'=>'Google Analytics Options'
	),
	array
	(
		'Type'=>'CheckBox',
		'ID'=>'GoogleAnalyticsEnabled',
		'Label'=>'<strong>Enable Google Analytics</strong>',
		'Description' => 'This module requres a <a href="http://analytics.google.com">Google Analytics</a> account.<br />The Google Analytics code will NOT be displayed for logged in users.',
		'Default'=> 'false'
	),
	array
	(
		'Type'=>'Text',
		'ID'=>'GoogleAnalyticsID',
		'Label'=>'<strong>Google Analytics ID</strong>',
		'Description'=>'Enter your <a href="http://analytics.google.com">Google Analytics</a> account ID.'
	),
	array
	(
		Type=>'End'
	),
	array
	(
		Type=>'Close'
	)
);

add_action('init', 'robots_txt');
$Panel = new ControlPanel('');
$Panel->SetOptions($Options);
$Panel->Initialize();

?>
