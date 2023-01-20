<?php get_header(); ?>
<main id="single">
	<div class="container">
		<div class="row">
			<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-lg-9'); ?>>
				<div class="entry-meta">
					<?php the_post_thumbnail(); ?>
					<div class="entry-content">
						<h1 class="entry-title">
							<div class="entry-date"><p><?php the_time('d.m.Y') ?></p></div>
							<?php the_title(); ?>		
						</h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div><!-- the_ID -->
			
			<div class="col-12 col-lg-3">
				<?php get_sidebar() ?>
			</div>

		</div><!-- row -->
	</div><!-- container -->
</main>

<?php get_footer(); ?>

<style>
	#single{
		background: #404297;
	}
	#single .attachment-post-thumbnail{
		width: 100%;
		max-width: 855px;
		max-height: 500px;
		object-fit: cover;

		border-radius: 10px 10px 0 0;
		-webkit-border-radius: 10px 10px 0 0;
		-moz-border-radius: 10px 10px 0 0;
	}
	#single .entry-meta .entry-content{
		background: #FFF;
	}
	#single .entry-meta .entry-date{
		width: 100%;
		max-width: 140px; 
		margin: 0 auto;
		background: #404297;

		border-radius: 10px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;

		position: relative;
		top: -43px;
	}
	#single .entry-meta .entry-date p{
		color: #FFF;
		font-size: 1.2rem;
		font-style: italic;
		text-align: center;
		padding: 15px;
	}
	#single .entry-meta .entry-title{
		width: 100%;
		max-width: 755px;
		margin: 0 auto;

		background: #FF9945;
		color: #FFF;
		font-size: 2.5rem;
		text-transform: uppercase;
		text-align: center;
		padding: 10px 7.5px 15px 7.5px;

		position: relative;
		top: -80px;
	}
	#single .entry-content{
		padding: 0 16px;
	}
</style>