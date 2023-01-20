<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<title>

		<?php

			 bloginfo('');

			?>

	</title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>

	<?php if(is_singular()) wp_enqueue_script('comment-reply');?>

	<?php wp_head();?>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf(__('%s latest posts', 'compontoweb' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>"/>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf(__('%s latest comments', 'compontoweb' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>

	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-136966346-1', 'auto');
	ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->

</head>

<body <?php body_class();?>>

	<?php get_template_part('template-parts/content', 'header')?>

 