<?
    get_header();
    //Template Name: Kitchen
?>
			<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="#"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content body-page-kitchen">
                <?php  custom_breadcrumbs(); ?>
				<div class="row">
					<div class="service">
						<h1><? the_title() ?></h1>
						<div class="service-block">
							<h2><? the_field('kitchen-title'); ?></h2>
							<div class="service-block-anons"><? the_field('kitchen-anons'); ?></div>
							<div class="service-block-content">
								<? the_field('kitchen-text'); ?>
							</div>
							<?php
                $image = get_field('kitchen-image');
                if( !empty($image) ):
                $url = $image['url'];
              ?>
							<div class="service-block-photo"><img src="<?php echo $url; ?>" alt=""></div>
							<? endif; ?>
						</div>
					</div>
				</div>
				<div class="service-info-gradient">
  				<div class="service-info service-info-cooking">
  					<div class="row">
  						<h2>Меню</h2>
  						<? if( have_rows('cook') ): while ( have_rows('cook') ) : the_row(); ?>
  						<h3><? the_sub_field('cook-category'); ?></h3>
  						<ul class="service-list">
  							<? if( have_rows('cook-item') ): while ( have_rows('cook-item') ) : the_row(); ?>
    						<li class="service-row">
    							<h3><? the_sub_field('cook-title') ?></h3>
    							<div class="service-text"><? the_sub_field('cook-anons') ?></div>
   							    <div class="service-tech"><span><? the_sub_field('cook-weight') ?></span><b><? the_sub_field('cook-price') ?></b></div>
    						</li>
    						<? endwhile; endif; ?>
  						</ul>
  						<? endwhile; endif; ?>
  					</div>
  				</div>
  				<div class="service-sheff">
  					<div class="row">
  						<div class="service-menu">
  							<h2><span>Оригинальное меню от шеф повара</span></h2>
  							<ul class="service-list">
        					<? while ( have_rows('menu',options) ) : the_row(); ?>
      						<li class="service-row">
      						  <h3 class="service-row-title"><? the_sub_field('menu-category') ?></h3>
      							<h3><? the_sub_field('menu-title') ?></h3>
      							<div class="service-text"><? the_sub_field('menu-anons') ?></div>
     							<?/*<div class="service-tech"><span><? the_sub_field('menu-weight') ?></span><b><? the_sub_field('menu-price') ?></b></div>*/?>
      						</li>
      						<? endwhile; ?>
      					</ul>
  						</div>
  					</div>
					</div>
				</div>
			</div>
		</div>
<?
    get_footer();
?>
