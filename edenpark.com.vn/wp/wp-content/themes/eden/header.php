<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="<?php bloginfo('template_directory');?>/img/common/favi_icon.png" type="image/gif" sizes="16x16">
	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<header>
			<div class="inner clearfix">
				<h1 id="logo"><a href="<?php echo home_url();?>">
<?php
		
// vars
$header = get_field('header', 'option');	

if( $header ): ?>
		<img src="<?php echo $header['logo']['url']; ?>" alt="<?php echo $header['logo']['alt']; ?>"><span><?php echo $header['logo']['caption']; ?></span>
		</a></h1>
			

				<p class="tel hvr-pulse-grow"><a href="<?php echo home_url();?>/contact/"><img src="<?php bloginfo('template_directory');?>/img/common/icon-mail.png" alt="mail"> <?php echo $header['mail']; ?></a>
				</p>
				<nav id="nav_global" class="mincho">
					<?php endif; ?>
					<?php wp_nav_menu( array(
     'theme_location' => 'main-nav-location', // tên location cần hiển thị
	'container_id' => 'nav_global', // thẻ nav chua menu
     'container' => 'ul', // thẻ nav chua menu
     'container_class' => 'main-nav', //main-nav: class của the nav
     'menu_class' => 'clearfix' // clearifx: class của ul bên trong
) ); ?>
				</nav>

			</div>
			<!--/.inner-->
		</header>