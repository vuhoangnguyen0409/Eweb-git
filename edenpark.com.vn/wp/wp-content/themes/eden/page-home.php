<?php
/**
 * Template Name: home
 **/
get_header();
?>
<?php

$image = get_field('bg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo '<style>.page-home #wrapper, .home #wrapper {
	    background: url('.$image['url'].') repeat-x center top;
	}</style>';

}

?>

<div id="content">
	<section class="service service01">
		<div class="inner">
			<h2 class="headline mincho">法人向けのサービス</h2>
			<p class="h-txt01"><?php the_field('home-txt01'); ?></p>
			<div class="bitex"><img src="<?php bloginfo('template_directory');?>/img/home/bitexco.png" alt="法人向けのサービス">
			</div>
			<div class="clearfix icon6">
				<?php $args = array(
			'posts_per_page'   => -1,
			'orderby'          => 'post_date',
			'order'            => 'ASC',
			'post_type'        => 'services',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'tax_query' => array(
				array (
					'taxonomy' => 'services_category',
					'field' => 'slug',
					'terms' => 'service-for-company',
				)
			),
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
				<p class="half-float">
					<b>
						<?php the_title(); ?>
					</b><span><i class="circle"></i><a href="<?php echo home_url( "/" ); ?>service#ss<?php echo get_the_ID(); ?>"><?php the_post_thumbnail(); ?></a></span>
					<b>
						<?php the_title(); ?>
					</b>
				</p>


				<?php
 endwhile;
endif;
wp_reset_query();  ?>
			</div>
			<p class="btn-more"><a href="<?php echo home_url( "/" ); ?>service"/>詳しくはこちら</a>
			</p>
		</div>
	</section>
	<!--/.service01-->
	<section class="service service02">
		<div class="inner">
			<h2 class="headline mincho">生活サポートサービス</h2>
			<p class="h-txt02"><?php the_field('home-txt02'); ?></p>
			<div class="icon5 clearfix">
				<?php $args = array(
			'posts_per_page'   => -1,
			'orderby'          => 'post_date',
			'order'            => 'ASC',
			'post_type'        => 'services',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'tax_query' => array(
				array (
					'taxonomy' => 'services_category',
					'field' => 'slug',
					'terms' => 'service-for-daily-support',
				)
			),
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
				<p><span><i class="circle"></i><a href="<?php echo home_url( "/" ); ?>service#ss<?php echo get_the_ID(); ?>"><?php the_post_thumbnail(); ?></a></span>
					<b>
						<?php the_title(); ?>
					</b>
				</p>
				<?php
 endwhile;
endif;
wp_reset_query();  ?>
			</div>
			<p class="btn-more"><a href="<?php echo home_url( "/" ); ?>service">詳しくはこちら</a>
			</p>
		</div>
	</section>
	<!--/.service02-->
	<section class="contact">
		<p class="contact-img"><img src="<?php bloginfo('template_directory');?>/img/common/contactsp.png" alt="contact"></p>
		<div class="contact-inner">
			<h2 class="headline mincho white">コンタクト</h2>
			<?php  echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>
		</div>
	</section>
	<!--contact-->
</div>
<?php get_footer(); ?>
