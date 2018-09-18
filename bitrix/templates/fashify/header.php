<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashify
 */

?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?=SITE_CHARSET?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/style.css" />

<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>

</head>

<body>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">

			<div class="site-branding">

				<?php
				$site_url="http://".$_SERVER['SERVER_NAME'];
				$rsSites = CSite::GetByID(SITE_ID);
				$arSite = $rsSites->Fetch();
				$siteName = $arSite['SITE_NAME'];

				if ( CSite::InDir('/index.php') ) :?>
					<h1 class="site-title"><?php print_url($site_url.'/index.php',$siteName,'rel="home"') ?></h1>
				<?php else : ?>
					<p class="site-title"><?php print_url($site_url.'/index.php',$siteName,'rel="home"') ?></p>
				<?php
				endif;

				$description = "Just another WPStash Sites site"
				if ( $description ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>

			</div><!-- .site-branding -->

			<div class="social-menu">
				<div id="menu-social" class="social-links">
					<ul id="menu-social" class="menu">
						<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="https://www.facebook.com/"><span class="screen-reader-text">facebook</span></a></li>
						<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="https://twitter.com/"><span class="screen-reader-text">twitter</span></a></li>
						<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="https://plus.google.com/u/0/"><span class="screen-reader-text">google plus</span></a></li>
						<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.linkedin.com"><span class="screen-reader-text">linkedin</span></a></li>
						<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="https://youtube.com"><span class="screen-reader-text">Youtube</span></a></li>
						<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="https://www.pinterest.com/"><span class="screen-reader-text">Pinterest</span></a></li>
					</ul>
				</div>
			</div>

		</div>

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="container">

			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Здесь должно быть меню!</button>

		</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
