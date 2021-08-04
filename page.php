<?
    get_header();
?>
			<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="#"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content body-page-single single">
                <?php  custom_breadcrumbs(); ?>
				<div class="row">
  				<?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-articles ui-articles">
              <h1><? the_title() ?></h1>
              <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
				</div>
			</div>
		</div>
<?
    get_footer();
?>
