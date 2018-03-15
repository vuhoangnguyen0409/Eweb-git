<?php
/**
 * Template Name: contact
 **/
get_header();
?>
<?php

$image = get_field('bg');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo '<style>.page-contact, .page-id-82 {
	    background: url('.$image['url'].') repeat-x center top;
	}</style>';

}

?>
<div id="content">
	<h2 class="page-title">コンタクト</h2>
	<section class="contact02">
		<p class="contact-img"><img src="<?php bloginfo('template_directory');?>/img/common/contactsp.png" alt="contact"></p>
		<div class="contact-inner">
			<?php  echo do_shortcode('[contact-form-7 id="4" title="Contact"]');?>
		</div>
	</section>
	<!-- /.contact02-->
	<section class="ggmap">
		<div class="inner">
			<h3 class="subtitle"><span><img src="<?php bloginfo('template_directory');?>/img/content/h3-contact.png" alt="コンタクト"></span><b>会社概要</b></h3>
			<p class="mapframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5263847007395!2d106.68867963224447!3d10.77093739232523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c3109d3d1%3A0xda6f832d0e84da2f!2zOSBOZ3V54buFbiBUcsOjaSwgQuG6v24gVGjDoG5oLCBRdeG6rW4gMSwgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1517579013778" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</p>
		</div>
	</section>
	<!-- /.ggmap-->
</div>
<!-- end content-->
<?php get_footer(); ?>
