
<?php
/*
* Template name: P&D
*/
get_header(); ?>

	<div class="container contentOfInfo">
	<div class="information">
		<div class="headline headline1"><p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field4', 1 ); ?></p1></div>
		<div class="paragraph1"><p2><?php echo get_post_meta( $post->ID, 'sw_yn_pd_fh_field1', 1 ); ?></p2></div>
		<div class="paragraph2"><p2><?php echo get_post_meta( $post->ID, 'sw_yn_pd_fh_field2', 1 ); ?></p2></div>
		<div class="paragraph3"><p2><?php echo get_post_meta( $post->ID, 'sw_yn_pd_fh_field3', 1 ); ?></p2></div>
		<div class="headline headline2"><p1><?php echo get_post_meta( $post->ID, 'sw_yn_pd_headline2', 1 ); ?></p1></div>
		<div class="paragraph4"><img class="imgCash" src="cash.png" alt=""><p2><?php echo get_post_meta( $post->ID, 'sw_yn_pd_sh_field1', 1 ); ?></p2></div>
		<div class="paragraph5"><p2 ><?php echo get_post_meta( $post->ID, 'sw_yn_pd_sh_field2', 1 ); ?></p2></div>
		<div class="paragraph6"><p2 ><?php echo get_post_meta( $post->ID, 'sw_yn_pd_sh_field3', 1 ); ?></p2></div>
		<div class="paragraph7"> <img class="imgCredit" src="credit.png" alt=""><p2><?php echo get_post_meta( $post->ID, 'sw_yn_pd_sh_field4', 1 ); ?></p2></div>
	</div>
    </div>
<?php get_footer() ; ?>


