<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title('-',true,'right'); ?><?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link href="http://www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
		<script src="http://www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
	</head>
	<body>
		<header>
			<div class="logo">
				<a href="<?php echo get_option('home'); ?>">
				</a>
			</div>
			<a href="http://www.mozilla.org/" id="tabzilla" class="tabzilla-closed">mozilla</a>
			<nav class="menu">
				<ul>
					<?php wp_nav_menu('title_li=&show_count=0&hierarchical=0'); ?> 
				</ul>
			</nav>
		</header>