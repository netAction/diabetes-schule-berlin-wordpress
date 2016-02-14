<?php
	the_content();
	if ( ! post_password_required() ) {
		get_template_part('templates/flexible-content');
	}
?>