<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- body open -->
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <main id="primary" class="site-main">
            <?php esc_html__( get_template_part( 'template-parts/header' ) ); ?>