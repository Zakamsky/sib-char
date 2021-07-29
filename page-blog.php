<?
/*
Template Name: Blog page
Template post type: post, page
*/
    get_header();
?>


			<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="#"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content body-page-single single">
				<div class="row">
  				<?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-articles ui-articles">
              <h1><? the_title() ?></h1>
              <?php the_content(); ?>
<?
global $post;
$args = array( 'numberposts' => 9 , 'category' => 4, 'orderby' => 'date');
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
?>
<div class="post">
<div class="post-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<div class="post-txt">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
<? /* ?><div class="post-date"><?php echo get_the_date('j F Y'); ?></div><? */ ?>
</div>
</div>
<?php
}
wp_reset_postdata();
?>
<br><br>
            </div>


            <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
<?
    get_footer();
?>