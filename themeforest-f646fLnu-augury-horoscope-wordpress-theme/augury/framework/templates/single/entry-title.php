<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

	<?php if( is_sticky( $post_ID ) ) echo '<span class="sticky-post">'.esc_html__('Featured', 'augury').'</span>'; ?>
	<h1><?php the_title();?></h1>