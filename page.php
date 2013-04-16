<?php get_header(); ?>
		<div class="clear"></div>
		<?php wp_reset_query(); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-title">
			<h1><?php the_title(); ?></h1>
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
						<h3>Partajează această pagină</h3>
					</div>
					<div class="comments">
						<?php comments_template(); ?> 
					</div>
				</article>
			</section>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<?php get_sidebar('2'); ?>	
		</div>
<?php get_footer(); ?>