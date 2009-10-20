<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">

<head>
    <link rel='shortcut icon' href='<?php bloginfo('template_url') ?>/images/favicon.ico' />
    <?php wp_head(); ?>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!--This is a plugin hook-->
    <?php wp_head(); ?>

</head>

<body>

	<div id="body-container">
		<div id="header-container">
			<div id="header"></div>
		</div>
		<div id="navigation">
			<div id="menu" class="menu">
				<ul class="menu sf-menu">
					<div id="navigation-1">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/mental-health/">Mental Health</a> 
					</div>
					<div id="navigation-2">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/sensory-health/">Sensory Health</a> 
					</div>
					<div id="navigation-3">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/organization/">Organization</a> 
					</div>
					<div id="navigation-4">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/education/">Education</a> 
					</div>
					<div id="navigation-5">
						<a rel="me" href="<?php bloginfo('url'); ?>/services/behavior/">Behavior</a> 
					</div>
				</ul>
			</div>
		</div>
		<div id="container">
