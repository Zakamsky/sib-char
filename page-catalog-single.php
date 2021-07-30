<?
    get_header();
    //Template Name: Catalog-single
?>

			<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="<?php echo get_page_link(187); ?>"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content body-page-single single">
				<div class="catalog">
  				<div class="row">

<!--  					--><?php //if( have_rows('catalog',options) ): ?>

                    <?php
                        $bath_selector = get_field('bath_selector');

                        $baths_rows = get_field('catalog',options);

                        $bath = $baths_rows[$bath_selector];
                    ?>

                    <?php if (isset($bath)) :?>

  					<div class="catalog-body">

                        <?php
  							$name = $bath['catalog-name'];
  							$price = $bath['catalog-price'];
  							$anons = $bath['catalog-anons'];
  							$desc = $bath['catalog-desc'];
  							$images = $bath['catalog-gallery'];
  							$icons = $bath['catalog-icons'];
  							$seo = $bath['catalog-seo'];
						?>
  						<div class="">
  							<div class="catalog-content">
    							<div class="left">
  								<h3><?php echo $name; ?></h3>
  								<div class="catalog-anons"><?php echo $anons; ?></div>
  								<div class="catalog-text"><?php echo $desc; ?></div>
    							</div>
    							<div class="right">
  								<div class="catalog-carousel">
  									<div class="carousel js-carousel carousel-catalog_icon">
  										<div class="swiper-wrapper">
  											<? if( $images ): ?>
  											<?php foreach( $images as $image ): ?>
  											<div class="swiper-slide" data-swiper-autoplay="5000">
  												<div class="catalog-item"><img src="<?php echo $image['sizes']['large']; ?>" alt=""></div>
  											</div>
  											<?php endforeach; ?>
  											<?php endif; ?>
  										</div>
  									</div>
  									<div class="carousel-control carousel-prev"></div>
  									<div class="carousel-control carousel-next"></div>
  								</div>
  								<div class="catalog-tour"><a href="<?php echo get_page_link(187); ?>"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
  								<div class="catalog-price"><?php echo $price; ?><div class="catalog-rules"><a href="<?php echo get_page_link(92); ?>">Способы и условия оплаты</a></div></div>
  								<div class="catalog-btn"><a href="" onclick="yaCounter47949776.reachGoal ('bron-bani');" class="btn btn-book ms_booking"><b>ЗАБРОНИРОВАТЬ</b> БАНЬКУ ON-LINE</a></div>
    							</div>
    							<div class="space"></div>
    							<div class="catalog-icons">
  									<div class="carousel js-icons">
  										<div class="swiper-wrapper">
    										<? if( $icons ): ?>
  											<?php foreach( $icons as $icon ): ?>
  											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['title']; ?>" />
  													<span><?php echo $icon['title']; ?></span>
  												</div>
  											</div>
  											<? endforeach; ?>
  											<? endif; ?>
  										</div>
  									</div>
  									<div class="carousel-control icons-prev"></div>
  									<div class="carousel-control icons-next"></div>
  								</div>
  								<div class="catalog-seo">
      						  <? echo $seo; ?>
    						  </div>
  							</div>
  						</div>


  					</div>
  					<? endif; ?>
  				</div>
  			</div>
				<div class="row">
					<div class="service">
						<div class="service-menu">
							<h2><span><a href="<?php echo get_page_link(14); ?>">Оригинальное меню от шеф повара</a></span></h2>
							<ul class="service-list">
								<? while ( have_rows('menu',options) ) : the_row(); ?>
    						<li class="service-row">
    						  <h3 class="service-row-title"><? the_sub_field('menu-category') ?></h3>
    							<h3><? the_sub_field('menu-title') ?></h3>
    							<div class="service-text"><? the_sub_field('menu-anons') ?></div>
    						</li>
    						<? endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<? if( have_rows('service',options) ): ?>
  			<div class="service-info-gradient">
    			<div class="service-info">
    				<div class="row">
    					<h2>Дополнительные услуги</h2>
    					<ul class="service-list">
      					<? while ( have_rows('service',options) ) : the_row(); ?>
    						<li class="service-row">
    						  <h3 class="service-row-title"><a href="<? the_sub_field('service-category-link'); ?>"><? the_sub_field('service-category') ?></a></h3>
    							<h3><? the_sub_field('service-title') ?></h3>
    							<div class="service-text"><? the_sub_field('service-anons') ?></div>
    							<?/* */?>
    							<? if( have_rows('service-item') ): ?>
      							<? while ( have_rows('service-item') ) : the_row(); ?>
      							  <div class="service-tech"><span>&ndash; <? the_sub_field('service-item-title') ?></span><b><? the_sub_field('service-item-price') ?></b></div>
      							<? endwhile; ?>
    							<? endif; ?>
    						</li>
    						<? endwhile; ?>
    					</ul>
    				</div>
    			</div>
  			</div>
  			<? endif; ?>
			</div>
		</div>
<?
    get_footer();
?>