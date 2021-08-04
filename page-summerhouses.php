<?
    get_header();
    //Template Name: SummerHouses
?>
<script>
jQuery(document).ready(function(){
<?

$besedkaID = 1;
//if (get_the_ID() == 367) $besedkaID = 2;

?>
  jQuery('.catalog-tabs').each(function(){
    jQuery('.id<?=$besedkaID?>').addClass('current')
  })
/*
$(window).load(function(){
<? if (get_the_ID() == 367) { ?>
$('a.id2').click();
<? } ?>
});
*/
});
</script>
<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="<?php echo get_page_link(187); ?>"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content body-page-single single">
                <?php  custom_breadcrumbs(); ?>
				<div class="catalog">
  				<div class="row js-tabs">
  					<div class="catalog-tabs">
  						<h2>БЕСЕДКИ</h2>

  						<?php if( have_rows('catalog_summerhouses',options) ): ?>
  						<?php $counter = 1; ?>
  						<ul class="catalog-tabs-nav c-t-n-besedki">
  							<?php while( have_rows('catalog_summerhouses',options) ): the_row();
  								$tab = get_sub_field('catalog-tab');
  								$price = get_sub_field('catalog-price');
  							?>
  							<li class="catalog-tabs-item" style="width:50% !important;"><a href="javascript:void(0)" data-id="catalog<?php echo $counter; ?>" class="js-tabs-a id<?php echo $counter; ?> "><b><?php echo $tab; ?></b><?php echo $price; ?></a></li>

  							<?php $counter++; ?>
  							<?php endwhile; ?>
  						</ul>
  						<? endif; ?>
  					</div>
  					<?php if( have_rows('catalog_summerhouses',options) ): ?>
  					<?php $counter = 1; ?>
  					<div class="catalog-body">
  						<?php while( have_rows('catalog_summerhouses',options) ): the_row();
  							$name = get_sub_field('catalog-name');
  							$price = get_sub_field('catalog-price');
  							$anons = get_sub_field('catalog-anons');
  							$desc = get_sub_field('catalog-desc');
                $text = get_sub_field('catalog-text');
  							$images = get_sub_field('catalog-gallery');
  							$icons = get_sub_field('catalog-icons');
  							$seo = get_sub_field('catalog-seo');
  						?>
  						<div class="js-tabs-body id<?php echo $counter; ?>" data-id="catalog<?php echo $counter; ?>">
  							<div class="catalog-content">
    							<div class="left">
  								<h1><?php echo $name; ?></h1>
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
  								<div class="catalog-btn"><a href="" class="btn btn-book ms_booking"><b>ЗАБРОНИРОВАТЬ</b> БЕСЕДКУ</a></div>
    							</div>
    							<div class="space"></div>
<? /* блок из админки ?>
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
<? */ ?>
						<div class="catalog-icons">
  									<div class="carousel js-icons">
  										<div class="swiper-wrapper">
    											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/rozetka.svg" alt="Электрическая розетка и свет"  style="width: 80px; height: 80 px;"/>
  													<span>Электрическая розетка и свет</span>
  												</div>
  											</div>
											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/stol.svg" alt="Большой стол и лавки"  style="width: 80px; height: 80 px;"/>
  													<span>Большой стол и лавки</span>
  												</div>
  											</div>
											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/mangal.svg" alt="Мангал, решётка-гриль"  style="width: 80px; height: 80 px;"/>
  													<span>Мангал, решётка-гриль</span>
  												</div>
  											</div>
    											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/spichki.svg" alt="Пакет угля, розжиг, спички"  style="width: 80px; height: 80 px;"/>
  													<span>Пакет угля, розжиг, спички</span>
  												</div>
  											</div>
											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/voda.svg" alt="Вода 5 литров"  style="width: 80px; height: 80 px;"/>
  													<span>Вода 5 литров</span>
  												</div>
  											</div>
											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/themes/public/img/icons-svg/ploshadka.svg" alt="Детская площадка"  style="width: 80px; height: 80 px;"/>
  													<span>Детская площадка</span>
  												</div>
  											</div>
											<div class="swiper-slide">
  												<div class="catalog-icons-item">
  													<img src="/wp-content/uploads/2018/11/parking.png" alt="Бесплатная парковка"  style="width: 80px; height: 80 px;"/>
  													<span>Бесплатная парковка</span>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="carousel-control icons-prev"></div>
  									<div class="carousel-control icons-next"></div>
  							</div>
                  <div class="catalog-seo">
                    <? echo $text; ?>
                  </div>
  								<div class="catalog-seo">
      						  <? echo $seo; ?>
    						  </div>
  							</div>
  						</div>
  						<?php $counter++; ?>
  						<? endwhile; ?>
  					</div>
  					<? endif; ?>
  				</div>
  			</div>
				<div class="row">
					<?
					/*
					<ul class="single-row">
						<li class="single-column">
							<div class="content">
								<h3>Уникальный интерьер</h3>
								<p>Для отделки помещений комплекса использовалось древесина кедра, сосны и&nbsp;лиственницы, натуральный камень, для отделки парных&nbsp;&mdash; древесина кедра. Сам сруб выполнен из&nbsp;лафета ручной рубки.</p>
								<p>Впечатляет оригинальная архитектурная форма помещений&nbsp;&mdash; скошенные потолки и&nbsp;просторные светлые комнаты. Помещения для отдыха и&nbsp;парения выполнены в&nbsp;разных форматах.</p>
								<div class="tour"><a href="<?php echo get_page_link(187); ?>"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
							</div>
							<div class="image">
								<img src="/wp-content/themes/public/img/files/2.jpg" alt="">
							</div>
						</li>
						<li class="single-column">
							<div class="content">
								<h3>Русская печь с&nbsp;мягким паром</h3>
								<p>Русская печь, которая находится в&nbsp;&laquo;Таежной&raquo; бани, это гордость нашего комплекса. Она дает насыщенный пар, который дарит силы и&nbsp;избавляет от&nbsp;мышечного напряжения. При парении используются натуральные камни. Воздух насыщен ароматами хвойного леса, древесина кедра и&nbsp;лиственницы выделяет фитонциды&nbsp;&mdash; особые вещества, которые дают мощный антибактериальный эффект.</p>
								<div class="tour"><a href="<?php echo get_page_link(187); ?>"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
							</div>
							<div class="image">
								<img src="/wp-content/themes/public/img/files/3.jpg" alt="">
							</div>
						</li>
						<li class="single-column">
							<div class="content">
								<h3>Особенное меню для гурманов</h3>
								<p>Некоторые блюда вы&nbsp;сможете найти только у&nbsp;нас. Особенность кухни&nbsp;&mdash; оригинальное меню от&nbsp;шеф повара. Мы&nbsp;постарались отразить индивидуальный стиль наших бань. В&nbsp;наших баня можно отведать мясо дикого кабана и&nbsp;дикой косули. Узнать, каково на&nbsp;вкус мясо дикого марала и&nbsp;насладиться вкусом серо-голубой стерляди и&nbsp;других рыбных деликатесов.</p>
								<div class="single-more"><a href="<?php echo get_page_link(14); ?>">Меню ресторана</a></div>
							</div>
							<div class="image">
								<img src="/wp-content/themes/public/img/files/4.jpg" alt="">
							</div>
						</li>
					</ul>
					*/
					?>

				</div>
				<? if( have_rows('service',options) ): ?>
  			<div class="service-info-gradient">
    			<div class="service-info">
    				<div class="row">
    					<h2>Дополнительные услуги</h2>
    					<ul class="service-list">
      					<? while ( have_rows('service_summerhouses',options) ) : the_row(); ?>
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
								<?/* */?>
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
