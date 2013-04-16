<ul class="related-post">
<?php if ($related_query->have_posts()):?>
<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<h4 class="related-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h4>
	</li>
<?php endwhile; ?>
</ul>
<?php else: ?>

<?php endif; ?>