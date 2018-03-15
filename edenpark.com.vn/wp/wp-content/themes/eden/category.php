<?php
get_header();
?>
<div id="content">
	<h2 class="page-title">Blog<b>リアルなベトナムローカル情報を知りましょう！</b></h2>
	<div class="blog">
		<div class="inner clearfix">
			<div class="blog-right">
				<h3 class="cate-title">
					<?php single_cat_title( ); ?>
				</h3>
				<div class="blog-item-wrap clearfix">
					<?php

					if ( have_posts() ):
						while ( have_posts() ):
							the_post();
					?>
					<div class="blog-item">
						<p class="blog-img">
							<a href="<?php the_permalink(); ?>">
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
?>

				</div>
				<!--/.blog-item-wrap-->
				<div class="paginaton">
				<?php wpex_pagination(); ?>
					<!--<ol>
						<li><a class="page-numbers" href="#">1</a>
						</li>
						<li><a class="page-numbers" href="#">2</a>
						</li>
						<li><a class="page-numbers" href="#">3</a>
						</li>
					</ol>-->
				</div>
				<!--/.paginaton-->
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
		<div class="contact-inner">
			<h2 class="headline mincho white">コンタクト</h2>
			<?php  echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>
		</div>
	</section>
	<!--contact-->
</div>
<!-- end content-->
<?php get_footer(); ?>