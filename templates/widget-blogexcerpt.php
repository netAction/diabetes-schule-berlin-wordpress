<div class="widget-blogexcerpt">
	<h2>Blog</h2>

	<?php
		$recentPosts = new WP_Query();
		$recentPosts->query('showposts=3');

		while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
		<?php if ( has_post_thumbnail() ) { ?>
		<article>
			<div class="row"><div class="col-sm-4">
			<div class="widget-blogexcerpt-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
			</div><div class="col-sm-8">
			<header>
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php get_template_part('templates/entry-meta'); ?>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
			</div></div>
		</article>
		<?php } else { ?>
		<article>
			<header>
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php get_template_part('templates/entry-meta'); ?>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
		</article>

		<?php } ?>

	<?php endwhile;
		wp_reset_postdata();
	?>
</div><!-- widget-blogexcerpt -->
