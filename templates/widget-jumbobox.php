<div class="widget-jumbobox">
	<div class="jumbotron">
		<h1><?php echo esc_html(get_sub_field('heading')); ?></h1>
		<?php echo wpautop(esc_html(get_sub_field('text'))); ?>
		<?php if (get_sub_field('button-text')) { ?><div class="text-center">
			<br>
			<a href="<?php echo esc_url(get_sub_field('button-url')); ?>" class="btn btn-primary"><?php echo esc_html(get_sub_field('button-text')); ?></a>
		</div><?php } ?>
	</div>
</div><!-- widget-jumbobox -->
