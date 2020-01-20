<?php
/**
 * Plugin Name: WooCommerce
 * Plugin URI: https://woocommerce.com/
 * Description: An eCommerce toolkit that helps you sell anything. Beautifully.
 * Version: 3.8.0
 * Author: Automattic
 * Author URI: https://woocommerce.com
 * Text Domain: woocommerce
 * Domain Path: /i18n/languages/
 *
 * @package WooCommerce
 */

defined( 'ABSPATH' ) || exit;

/**
 * Template Name: good
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sweetyarning
 */

get_header();
?>

<?php echo get_template_part('frontimage');?>
    <img src="" alt="">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="title-products"><p1 id="cooltitle" ></p1></div>

            <?php woocommerce_content(); ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

