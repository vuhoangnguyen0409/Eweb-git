<?php
/**
 * Template Name: company
 **/
get_header();
?>
<?php

$image = get_field('bg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo '<style>.page-company, .page-id-78 {
	    background: url('.$image['url'].') repeat-x center top;
	}</style>';

}

?>
<div id="content">
			<h2 class="page-title">会社概要</h2>
			<section class="intro">
				<div class="inner clearfix">
					<p class="an"><img src="<?php bloginfo('template_directory');?>/img/content/an.png" alt="">
					</p>
					<div class="ms">
						<?php
						if ( have_posts() ):
   while ( have_posts() ) :
        the_post(); the_content();?>
<?php
 endwhile;
endif;
?>
					</div>
					<!--/.ms-->
					<p class="bg-ms"><img src="<?php bloginfo('template_directory');?>/img/content/bg-an.png" alt="">
					</p>
				</div>
				<!--/.inner-->
			</section>
			<!--/.intro-->
			<section class="c-info">
				<div class="c-info-tb">
					<table>
						<?php

// check if the repeater field has rows of data
if( have_rows('company-table') ):

 	// loop through the rows of data
    while ( have_rows('company-table') ) : the_row();

        $cleft = get_sub_field('company-left');
		$cright = get_sub_field('company-right');?>
						<tr>
							<td><?php echo $cleft; ?></td>
							<td><?php echo $cright; ?></td>
						</tr>
<?
    endwhile;

else :

    // no rows found

endif;

?>
					</table>
				</div>
			</section>
			<!--/.c-info-->
			<section class="advisor">
				<div class="inner">
					<h3 class="subtitle"><span><img src="<?php bloginfo('template_directory');?>/img/content/h3-contact.png" alt="アドバイザー"></span><b>アドバイザー</b></h3>
					<div class="clearfix advisor-wrap">
						<?php // check if the repeater field has rows of data
if( have_rows('advisor') ):

 	// loop through the rows of data
    while ( have_rows('advisor') ) : the_row();

        $advisorImg = get_sub_field('advisor-item');?>
						<div class="advisor-item">
							<p class="advisor-img"><img src="<?php echo $advisorImg['url']; ?>" alt="<?php echo $advisorImg['alt']; ?>">
							</p>
							<p class="ad-name"><?php echo $advisorImg['title']; ?></p>
							<p class="advisor-txt"><?php echo $advisorImg['caption']; ?></p>
						</div>
						<!--adviser-item-->

<?
    endwhile;

else :

    // no rows found

endif;

?>


					</div>
					<!--adviser-wrap-->
				</div>
				<!--/.inner-->
			</section>
			<!--/.adviser-->
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
