<?php get_header(); ?>
<div class="clear"></div>
<div class="welcome-msg">
	<h1><?php bloginfo('description'); ?></h1>
</div>
<div class="slider">
	<?php if (function_exists("easing_slider")){ easing_slider(); }; ?>
</div>
	<div class="content">
		<section class="primary">
			<?php /* If there are no posts to display, such as an empty archive page */ ?>  
			<?php if ( ! have_posts() ) : ?>
			<div class="not-found">
				<h1>Not Found</h1>  
				<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p> 
			</div>
			<?php endif; ?>  
			<?php while ( have_posts() ) : the_post(); ?>
			<article class="post" id="post-1">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<ul class="post-meta">
					<li class="author"><?php the_author() ?></li>
					<li class="date"><?php the_time('F j, Y'); ?></li>
					<li class="comment"><?php comments_number( 'Nu sunt comentarii', 'Un comentariu', '% comentarii' ); ?></li>
				</ul>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more">Citeste mai mult »</a>
			</article>
			<?php endwhile; wp_reset_query();?>
			<div class='wp-pagenavi'>
				<?php wp_pagenavi();?>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>