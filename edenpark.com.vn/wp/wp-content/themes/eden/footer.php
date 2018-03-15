<footer>
	<div class="inner">
		<p id="pagetop"><a href="#wrapper"><img src="<?php bloginfo('template_directory');?>/img/common/page-top.png" alt="pagetop"></a></p>
		<?php 

// check if the repeater team
				if ( have_rows( 'footer', 'option' ) ):
					// loop team
					while ( have_rows( 'footer', 'option' ) ): the_row();
				// vars
				$logoFooter = get_sub_field('logo-footer');
				$socials = get_sub_field( 'socials' );//group
				$mailFooter = get_sub_field('mail-footer');
				$address = get_sub_field('address');
		?>
		
	
	<p class="f-logo"><img src="<?php echo $logoFooter['url']; ?>" alt="<?php echo $logoFooter['alt']; ?>"><span><?php echo $logoFooter['caption']; ?></span></p>
<div class="socials clearfix">
	<p><a href="<?php echo $socials['fb']; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/common/fb.png" alt="facebook" ></a></p>
	<p><a href="<?php echo $socials['in']; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/common/in.png" alt="in" ></a></p>
	<p><a href="<?php echo $socials['line']; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/common/line.png" alt="line" ></a></p>
	<p><a href="<?php echo $socials['viber']; ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/common/viber.png" alt="viber" ></a></p>
	
</div>
		<nav id="fnav">
			<ul>
				<li><a href="<?php echo home_url( "/" ); ?>">Home</a></li>
				<li><a href="<?php echo home_url( "/" ); ?>service/">サービス</a></li>
				<li><a href="<?php echo home_url( "/" ); ?>company/">会社概要</a></li>
				<li><a href="<?php echo home_url( "/" ); ?>blog/">Blog</a></li>
				<li><a href="<?php echo home_url( "/" ); ?>contact/">コンタクト</a></li>
			</ul>
		</nav>
		<p class="ftel hvr-pulse-grow"><a href="<?php echo home_url( "/" ); ?>contact/"><?php echo $mailFooter; ?></a></p>
		<p class="faddess"><?php echo $address; ?></p>
<?php   endwhile;
		endif; ?>
	</div>
	<p id="cr">@2018-Eden Park</p>
</footer>
</div>
<!-- /#wrapper -->
</body>
</html>