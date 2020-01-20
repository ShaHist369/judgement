<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sweetyarning
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php global $redux_demo;?>
<body onresize="myFunction()" <?php body_class(); ?>>
<section class="body">
    <div class="header">
        <div class="phoneNumber" >

            <i class="fas fa-phone"></i>
            <?php echo $redux_demo['phone']; ?>

        </div>
    </div>
<div class="menu">

        <div class="site-branding block img logo">
            <?php
            the_custom_logo();

                ?>

        </div>

    <div id="clicker" class="mobileMenu"><a href="#">меню</a></div>
    <div class="container">

        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'container_class'     => 'head',
            'container_id'     => 'slide',
            'menu_class'     => 'head',

        ) );
        ?>
    </div>
    <div class="search-header">

        <form role="search" method="get" action="<?php echo home_url("/"); ?>" class="search-form">
        <input type="text" id="search-input" class="commonInput search-field" placeholder="поиск по сайту" name="s">
        <button class="searchBtn">поиск</button>
        </form>
    </div>


</div>
</section>























