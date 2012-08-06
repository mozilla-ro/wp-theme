<?php get_header(); ?>
		<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="clear"></div>
		<div class="single-p-title">
			<h1><?php the_title(); ?></h1>
			<div class="single-p-author">
				<?php echo get_avatar( get_the_author_email(), '50' ); ?>
				<span>Articol scris de <br/><a href="<?php the_author_url(); ?> "><?php the_author(); ?></a></span>
			</div>
		</div>
		<div id="content">
			<section class="primary">
				<article class="single-post">
					<?php the_content(); ?>
					<div class="share-this">	
						<ul class="socials">
							<li class="facebook"><a href="#"></a></li>
							<li class="twitter"><a href="#"></a></li>
							<li class="diaspora"><a href="#"></a></li>
							<li class="identica"><a href="#"></a></li>
							<li class="rss"><a href="#"></a></li>
						</ul>
						<span>Ti-a placut? Partajeaza acest articol</span>
					</div>
				</article>
				<div id="comments">
					<h3>Comments</h3>
					<?php comments_template(); ?>  
				</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
			</section>
			<?php get_sidebar('single'); ?>
		</div>
<?php get_footer(); ?>