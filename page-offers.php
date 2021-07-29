<?
    get_header();
    //Template Name: Offers
?>
			<div class="wrap-promo"></div>
			<div class="wrap-tour"><a href="#"><i></i><span>Тур по&nbsp;комплексу</span></a></div>
			<div class="body-page-content">
				<div class="row">
					<div class="offers">
						<h1><? the_title() ?></h1>
						<?php if(get_field('offer')): ?>
						<ul class="offers-block-list">
		          <?php while(has_sub_field('offer')): ?>
  		        <li>
    						<div class="offers-block">
    							<h2><? the_sub_field('offer-title'); ?></h2>
    							<div class="offers-block-relative">
      							<div class="offers-block-anons"><? the_sub_field('offer-anons'); ?></div>
      							<div class="offers-block-time"><? the_sub_field('offer-date'); ?></div>
      							<div class="offers-block-content"><? the_sub_field('offer-text'); ?></div>
      							<div class="offers-block-term"><? the_sub_field('offer-time'); ?></div>
    							</div>
    							<div class="offers-block-photo"><? $image = get_sub_field('offer-image'); ?><img src="<?php echo $image['url']; ?>" alt=""></div>
    							<div class="offers-block-contacts">
    								<b>Узнайте подробнее</b>
    								<a href="tel:+7 383 383-50-30" class="btn podmena">+7 383 383-50-30</a>
    							</div>
    						</div>
              </li>
              <? endwhile; ?>
            </ul>
            <? endif; ?>
					</div>
				</div>
				<div class="offers-info">
					<div class="row">
						<h2>О наших банях</h2>
							<div class="page-articles ui-articles">
							<p>Представьте, что вы отъехали на 10 минут от центра города и тут же попали в чудесный уголок дикой природы. Здесь неспешно течет река, на берегу шумят листвой деревья, по воде плавают утки и даже можно увидеть цапель. Думаете, такое бывает только в сказках? Нет, загляните к нам, в дом банного отдыха «Сибирский характер», и вы попадете точно в такое место.</p>
							</div>
						<div class="column">
							<!--div class="column-cell"-->
								
							<!--/div-->							
						</div>
					</div>
				</div>
			</div>
		</div>
<?
    get_footer();
?>