<?
  get_header();
  //Template Name: Service Item
?>
		<div class="wrap-promo"></div>
		<div class="wrap-tour"><a href="#"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
		<div class="body-page-content">
			<div class="row">
				<div class="service">
					<h1>Услуги</h1>
					<div class="service-block">
						<h1><? the_field('service-title') ?></h1>
						<div class="service-block-anons"><? the_field('service-anons') ?></div>
						<div class="service-block-content"><? the_field('service-text') ?></div>
						<?php
              $image = get_field('service-image');
              if( !empty($image) ):
              $url = $image['url'];                  
            ?>
						<div class="service-block-photo"><img src="<? echo $url; ?>" alt=""></div>
						<? endif; ?>
					<?  $price = get_field('service-price');
						if ( get_the_ID() != 234 ) { ?>
						<div class="service-block-price"><? the_field('service-price') ?></div>
						<div class="service-block-rules"><a href="<?php echo get_page_link(92); ?>">Способы и условия оплаты</a></div>
					<? } else { ?>
						<div class="service-block-rules">&nbsp;<br>&nbsp;<br>&nbsp;<br></div>
					<? } ?>
						<div class="service-block-btn"><a href="" onclick="yaCounter47949776.reachGoal ('bron-bani');" class="btn btn-book ms_booking"><b>ЗАБРОНИРОВАТЬ</b> БАНЬКУ ON-LINE</a></div>
					</div>
<? /* Фирменные услуги (для страницы Услуги) */ ?>
			<? if( have_rows('service',options) && get_the_ID() == 234 ): ?>
			</div>
			</div>

			<div class="service-info-gradient">
  			<div class="service-info pt0">
  				<div class="row">
  					<h2>Фирменные услуги</h2>
  					<ul class="service-list">
    					<? while ( have_rows('service',options) ) : the_row(); ?>
  						<li class="service-row">
  						  <h3 class="service-row-title"><a href="<? the_sub_field('service-category-link'); ?>"><? the_sub_field('service-category') ?></a></h3>
  							<h3><? the_sub_field('service-title') ?></h3>
  							<div class="service-text"><? the_sub_field('service-anons') ?></div>
  							<?/* ?>
  							<? if( have_rows('service-item') ): ?>
    							<? while ( have_rows('service-item') ) : the_row(); ?>
    							  <div class="service-tech"><span>&ndash; <? the_sub_field('service-item-title') ?></span><b><? the_sub_field('service-item-price') ?></b></div>
    							<? endwhile; ?>
  							<? endif; ?>
							<? */?>
  						</li>
  						<? endwhile; ?>
  					</ul>
  				</div>
  			</div>
			</div>
			<div class="row">
				<div class="service">
			<? endif; ?>
<? /* */ ?>
					<? if( have_rows('service-submenu') ): ?>
					<div class="service-menu">
						<? if( get_the_ID() == 234 ) { ?>
						<h2>Полезные мелочи</h2>
						<? } else { ?>
						<h2>Мы предлагаем</h2>
						<? } ?>
						<ul class="service-list">
  						<? while ( have_rows('service-submenu') ) : the_row(); ?>
						<? if( get_the_ID() == 234 ) { ?>
							<li class="service-row list-simple-item">
						<? } else { ?>
							<li class="service-row">
						<? } ?>
								<h3><? the_sub_field('service-title') ?></h3>
  							<div class="service-text"><? the_sub_field('service-anons') ?></div>
  							<? if( have_rows('service-item') ): ?>
    							<? while ( have_rows('service-item') ) : the_row(); ?>
    							  <div class="service-tech"><span>&ndash; <? the_sub_field('service-item-title') ?></span><b><? the_sub_field('service-item-price') ?></b></div>
    							<? endwhile; ?>
  							<? endif; ?>
							</li>
							<? endwhile; ?>
							<? if( get_the_ID() == 234 ) { ?>
								<li class="service-row"></li>
							<? } ?>
						</ul>
					</div>
					<? endif; ?>
				</div>
			</div>
			<? if( have_rows('service',options) && get_the_ID() != 234 ): ?>
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