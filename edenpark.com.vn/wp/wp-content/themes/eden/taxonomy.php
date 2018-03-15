<?php /** * Template Name: phanloai **/ get_header(); ?>
<!-- Gallery -->
<section id="galleries">
    <!-- Photo Galleries -->
    <div class="cat_block">
        <!-- Filters -->
        <header>
            <h1><?php single_cat_title(); ?></h1> </header>
        <div class="content">
            <ul class="clearfix list_cate_gallery">
                <?php if (have_posts()): while(have_posts()): the_post(); ?>
                <li>
                    <div class="cate_img">
                        <?php if ( has_post_thumbnail() ) the_post_thumbnail() ;?>
						<a href="<?php the_permalink() ;?>" class="cate_link"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </div>
                    <p class="cate_detail">
                        <?php echo get_the_date( 'Y.m.d') ;?><br>
						<?php the_title() ;?>
						
                    </p>
                </li>
                <?php endwhile; ?>
                <?php endif;?> </ul>
        </div>
    </div>
</section>
<!-- Footer -->
<?php get_footer(); ?>
