<?php
/**
 * Template Name: blog
 **/
get_header();
?>
<?php

$image = get_field('bg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo '<style>.page-blog, .page-id-80, .single-post, .category {
	    background: url('.$image['url'].') repeat-x center top;
	}</style>';

}

?>
<div id="content">
	<h2 class="page-title">Blog<b>リアルなベトナムローカル情報を知りましょう！</b></h2>
	<div class="blog">
		<div class="inner clearfix">
			<div class="blog-right">
				<div class="blog-item-wrap clearfix">
					<?php $args = array(
			'posts_per_page'   => 6,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'tax_query' => array(
				array (
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'post-category',
				)
			),
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
					<div class="blog-item">
						<p class="blog-img">
							<a href="<?php the_permalink(); ?> ">
								<?php the_post_thumbnail(); ?>
							</a>
						</p>
						<p class="blog-txt">
							<?php the_title(); ?>
						</p>
					</div>
					<!--/.blog-item-->
					<?php
 endwhile;
endif;
wp_reset_query();  ?>
				</div>
				<!--/.blog-item-wrap-->
				<p class="btn-more"><a href="<?php echo home_url( "/" ); ?>/category/post-category/">問い合わせする</a>
				</p>
			</div>
			<!--/.right-->
			<aside class="blog-left">
				<?php include('side-cat.php');?>
			</aside>
		</div>
		<!--/.inner-->
	</div>
	<!--/.blog-->
	<div class="blog" style="background: #fff;">
		<div class="inner clearfix">
			<div class="blog-right">
				<div class="blog-item-wrap clearfix">
					<?php $args = array(
			'posts_per_page'   => 6,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'tax_query' => array(
				array (
					'taxonomy' => 'category',
					'field' => 'slug',
					'terms' => 'post-favorite',
				)
			),
		);query_posts( $args );

if ( have_posts() ):
   while ( have_posts() ) :
        the_post();?>
					<div class="blog-item">
						<p class="blog-img">
							<a href="<?php the_permalink(); ?> ">
								<?php the_post_thumbnail(); ?>
							</a>
						</p>
						<p class="blog-txt">
							<?php the_title(); ?>
						</p>
					</div>
					<!--/.blog-item-->
					<?php
 endwhile;
endif;
wp_reset_query();  ?>
				</div>
				<!--/.blog-item-wrap-->
				<p class="btn-more"><a href="<?php echo home_url( "/" ); ?>/category/post-favorite/">問い合わせする</a>
				</p>
			</div>
			<!--/.right-->
			<aside class="blog-left">
				<?php include('side-favorite.php');?>
			</aside>
		</div>
		<!--/.inner-->
	</div>
	<!--/.blog-->
</div>
<!-- end content-->
<?php get_footer(); ?>
