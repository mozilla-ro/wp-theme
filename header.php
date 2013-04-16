<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title('-',true,'right'); ?><?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="http://www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
		<script src="http://www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
		<?php wp_head(); ?>

		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>
	<body>
		<header>
			<div class="logo">
				<a href="<?php echo get_option('home'); ?>" title="Mozilla Romania"></a>
			</div>
			<a href="http://www.mozilla.org/" id="tabzilla" class="tabzilla-closed">mozilla</a>
			<nav class="navigation">
				<ul>
					<?php wp_nav_menu('title_li=&show_count=0&hierarchical=0'); ?> 
				</ul>
			</nav>
		</header>