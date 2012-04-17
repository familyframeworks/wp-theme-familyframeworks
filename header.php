<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">

<head>
    <!--<link rel='shortcut icon' href='<?php bloginfo('template_url') ?>/images/favicon.ico' />-->
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php $count_posts = wp_count_posts();
    if ($count_posts->publish > 0) { ?> 
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" /><?php } ?>

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!--This is a plugin hook-->
    <?php wp_head(); ?>

</head>

<body>

	<div id="body-container">
		<div id="header-container">
			<div id="header">
				<a rel="me" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header_logo.jpg" width="800px" height="113px"></a>
			</div>
		</div>
		<div id="navigation">
			<div id="menu" class="menu">
				<ul class="menu sf-menu">
					<li id="navigation-1">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/mental-health/">Mental Health</a> 
					</li>
					<li id="navigation-2">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/sensory-health/">Sensory Health</a> 
					</li>
					<li id="navigation-3">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/organization/">Organization</a> 
					</li>
					<li id="navigation-4">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/education/">Education</a> 
					</li>
					<li id="navigation-5">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/behavior/">Behavior</a> 
					</li>
				</ul>
			</div>
		</div>
		<div id="container">
