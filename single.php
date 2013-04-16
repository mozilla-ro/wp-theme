<?php get_header(); ?>
		<div class="clear"></div>
		<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-title">
			<h1><?php the_title(); ?></h1>
			<div class="post-author">
				<?php echo get_avatar( get_the_author_email(), '50' ); ?>
				<span>Articol scris de<br/><a href="<?php the_author_url(); ?> "><?php the_author(); ?></a></span>
			</div>
		</div>
		<div class="content">
			<section class="primary">
				<article class="single-post">
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div class="tags">
						<?php the_tags('', ' ', ''); ?> 
					</div>
					<ul class="related-posts">
						<h3>Articole asemănătoare:</h3>
						<?php related_posts() ?>
					</ul>
					<div class="post-share">
						<ul class="socials">
							<li class="fb-icon">
								<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Facebook" rel="nofollow" onclick="window.open(this.href, 'popupwindow', 'width=627,height=437,scrollbars,resizable'); return false;"></a>
							</li>
							<li class="tw-icon">
								<a href="http://twitter.com/home?status=<?php the_title(); ?> - <?php echo get_bloginfo('url') ?>?p=<?php the_ID(); ?>@dsgnfeed" title="Twitter" rel="nofollow" onclick="window.open(this.href, 'popupwindow', 'width=627,height=437,scrollbars,resizable'); return false;"></a>
							</li>
							<li class="diaspora-icon">
								<a href=""></a>
							</li>
							<li class="identica-icon">
								<a href=""></a>
							</li>
						</ul>
						<h3>Ți-a plăcut? Partajează acest articol</h3>
					</div>
					<div class="comments">
						<?php comments_template(); ?> 
					</div>
				</article>
			</section>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<?php get_sidebar('single'); ?>	
		</div>
<?php get_footer(); ?>