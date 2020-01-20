<?php
/*
 * Template name: Contacts
 */
get_header();
?>

<div class="contentOfInfo">
    <div class="contacts">
        <div class="headline sotial">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_descr1', 1 ); ?></p1>
        </div>
        <div class="headline schedule">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_descr2', 1 ); ?></p1>
        </div>
        <div class="contacts1">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_fh_field1', 1 ); ?></p1>
        </div>
        <div class="contacts2">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_fh_field2', 1 ); ?></p1>
        </div>
        <div class="contacts3">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_fh_field3', 1 ); ?></p1>
        </div>
        <div class="contacts4">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field1', 1 ); ?></p1>
        </div>
        <div class="contacts5">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field2', 1 ); ?></p1>
        </div>
        <div class="contacts6">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field3', 1 ); ?></p1>
        </div>
        <div class="contacts7">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field4', 1 ); ?></p1>
        </div>
        <div class="contacts8">
            <p1><?php echo get_post_meta( $post->ID, 'sw_yn_sh_field5', 1 ); ?></p1>
        </div>
        <div class="link links1"><a href="#"><img src="inst.png" alt=""></a></div>
        <div class="link links2"><a href="#"><img src="tg.png" alt=""></a></div>
        <div class="link links3"><a href="#"><img src="vk.png" alt=""></a></div>
    </div>
</div>


<?php get_footer() ; ?>
