<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whoami
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<!--@todo add  data-spy="scroll" data-target=".menu-area" data-offset="200" to body-->

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">


	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whoami' ); ?></a>


    <!-- Main Header -->
    <header class="main-header" id="home">
        <div class="content-table header-content-fixed ">
            <div class="whoim">
                <div class="box-line text-uppercase text-bold">
                    Who I Am
                </div>
            </div>
            <div class="v-content">
                <div class="container">
                    <h1 class="text-uppercase color-dark name">i’m Jhone doe</h1>
                    <h4 class="text-uppercase color-dark font-alt job"><span id="typed" class="typed"></span></h4>
                </div>
            </div>
        </div>
        <!-- Main navbar -->
        <div class="menu-area">
            <div class="toogle-bars">
                <a href="#menu-collapse" data-toggle="collapse" class="collapsed"><i class="fa fa-bars ic-open"></i> <i
                            class="fa fa-remove ic-close"></i> MENU</a>
            </div>
            <div class="menu-collapse collapse" id="menu-collapse">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="breadcrumb main-nav no-space">
                                <li class="link-inpage"><a href="#contact" id="hireme-tab" class="link-inpage"><i
                                                class="fa fa-briefcase"></i> Hire Me Now</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id' => 'primary-menu',
                                    'menu_class' => 'breadcrumb main-nav nav',
                                ));
                            ?>
                        </div>
                        <div class="col-md-3">
                            <ul class="breadcrumb main-nav no-space">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Main navbar -->
    </header><!-- End Main Header -->


    <div id="content" class="site-content">
