<?php
/**
 * Template Name: service
 **/
get_header();
?>
<?php

$image = get_field('bg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo '<style>.page-service, .page-id-76 {
	    background: url('.$image['url'].') repeat-x center top;
	}</style>';

}

?>
<div id="content">
	<h2 class="page-title">サービス</h2>
	<nav class="inner service-icons">
		<ul class="clearfix">
			<?php $args = array(
			'posts_per_page'   => -1,
			'orderby'          => 'post_date',
			'order'            => 'ASC',
			'post_type'        => 'services',
			'post_status'      => 'publish',
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
			<li>
                <div class="service-icons-wrap">
                    <a href="#ss<?php echo get_the_ID(); ?>"><span><?php the_post_thumbnail(); ?></span></a>
                </div>
                <p class="service-icons-title">
                    <b>
    					<?php the_title(); ?>
    				</b>
                </p>
			</li>
			<?php
 endwhile;
endif;
wp_reset_query();  ?>


		</ul>
	</nav>
	<section class="service-wrapper">
		<?php $args = array(
			'posts_per_page'   => -1,
			'orderby'          => 'post_date',
			'order'            => 'ASC',
			'post_type'        => 'services',
			'post_status'      => 'publish',
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
		<div class="service-item">
			<div class="inner1200">
				<h3 id="<?php echo 'ss'.get_the_ID(); ?>"><span><?php the_post_thumbnail(); ?></span><b><?php the_title(); ?></b></h3>
				<div class="service-item-txt"><?php the_content(); ?></div>
				<?php
				// check if the repeater field has rows of data
				if ( have_rows( 'services' ) ):

					// loop through the rows of data
					while ( have_rows( 'services' ) ): the_row();

				// display a sub field value
				$image01 = get_sub_field( 'img01' );
				$image02 = get_sub_field( 'img02' );
				$image03 = get_sub_field( 'img03' );
				$image04 = get_sub_field( 'img04' );?>
				<div class="service-item-imgs fancybox clearfix">
					<p><a href="<?php echo $image01['url']; ?>"><img src="<?php echo $image01['url']; ?>" alt="<?php echo $image01['alt']; ?>"></a>
					</p>
					<p><a href="<?php echo $image02['url']; ?>"><img src="<?php echo $image02['url']; ?>" alt="<?php echo $image02['alt']; ?>"></a>
					</p>
					<p><a href="<?php echo $image03['url']; ?>"><img src="<?php echo $image03['url']; ?>" alt="<?php echo $image03['alt']; ?>"></a>
					</p>
					<p><a href="<?php echo $image04['url']; ?>"><img src="<?php echo $image04['url']; ?>" alt="<?php echo $image04['alt']; ?>"></a>
					</p>
				</div>
				<?php
				endwhile;

				else :

					// no rows found

					endif;

				?>

				<p class="btn-more"><a href="#ctf">問い合わせする</a>
				</p>
			</div>
		</div>
		<!--/.service-item-->

		<?php
 endwhile;
endif;
wp_reset_query();  ?>

	</section>
	<!--/.service-wrapper-->
	<section class="contact">
		<p class="contact-img"><img src="<?php bloginfo('template_directory');?>/img/common/contactsp.png" alt="contact"></p>
		<div class="contact-inner">

			<h2 class="headline mincho white" id="ctf">コンタクト</h2>
			<?php  echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>
		</div>
	</section>
	<!--contact-->
</div>
<!-- end content-->
<?php get_footer(); ?>
