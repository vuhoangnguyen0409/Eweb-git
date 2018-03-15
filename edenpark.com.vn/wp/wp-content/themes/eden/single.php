<?php
get_header();
?>
<div id="content">
	<?php
	if ( have_posts() ):
		while ( have_posts() ):
			the_post();
	$image = get_field( 'blog-img' );
	?>
	<h2 class="page-title">Blog<b><?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory;?></b></h2>
	<div class="blog">
		<div class="inner clearfix">
			<div class="blog-right">

				<h3 class="cate-title">
					<?php the_title();?>
				</h3>
				<p class="detail-txt">
					<?php the_field('blog-detail01'); ?>
				</p>
				<p class="detail-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				</p>
				<p class="detail-txt">
					<?php the_field('blog-detail02'); ?>
				</p>
				<p class="detail-video">
					<?php the_field('blog-video'); ?>
					<b>
						<?php the_field('blog-video-txt'); ?>
					</b>
				</p>
				<?php  
 endwhile;
endif;
wp_reset_query();  ?>
			</div>
			<!--/.right-->
			<aside class="blog-left">
				<?php include('side-cat.php');?>
				<p style="height: 25px;"></p>
				<?php include('side-favorite.php');?>
			</aside>
		</div>
		<!--/.inner-->
	</div>
	<!--/.blog-->
	<section class="contact">
		<p class="contact-img"><img src="<?php bloginfo('template_directory');?>/img/common/contactsp.png" alt="contact"></p>
		<div class="contact-inner">
			<h2 class="headline mincho white">コンタクト</h2>
			<?php  echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>
		</div>
	</section>
	<!--contact-->
</div>
<!-- end content-->
<?php get_footer(); ?>