<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo wp_get_document_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=cyrillic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bad+Script&subset=cyrillic&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/wp-content/themes/public/style.css?v=1.8">
<link rel="stylesheet" href="/wp-content/themes/public/css/additional.css?v=1.5">

  <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/public/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/public/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/public/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/public/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/public/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/public/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/public/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/public/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/public/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/public/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/public/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/public/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/public/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/wp-content/themes/public/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <? wp_head(); ?>

<!-- popup -->
<? /*  ?>
<script type="text/javascript" src="/wp-content/themes/public/js/arcticmodal/jquery.arcticmodal.js"></script>
<link rel="stylesheet" href="/wp-content/themes/public/js/arcticmodal/jquery.arcticmodal.css" />
<link rel="stylesheet" href="/wp-content/themes/public/js/arcticmodal/themes/simple.css?v=2.4" />
<? */ ?>
<!-- / -->

<script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>

<? /* popup  ?>
<script>
  (function($) {
    $(function() {
      if (!$.cookie('popupGHouses')) {

        function getWindow(){
          $('.box-modal').arcticmodal({
            closeOnOverlayClick: true,
            closeOnEsc: true
          });
        };

        setTimeout (getWindow, 7000);
      }

      $.cookie('popupGHouses', true, {
        expires: 1,
        path: '/'
      });

    })
  })(jQuery)
</script>
<?  popup */ ?>

<script type="text/javascript" src="/wp-content/themes/public/js/swiper.jquery.min.js"></script>

<? /* popup block */ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
<? /* popup block */ ?>

<script type="text/javascript" src="/wp-content/themes/public/js/common.js?v=1.0"></script>

<?/*
<script>
        window.roistatCalltrackingScripts = [3];
</script>
*/?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M36N7FR');</script>
<!-- End Google Tag Manager -->

</head>

<body<?php if (is_front_page() ) {echo' class="body-homepage"'; } else { echo ' class="body-page"'; } ?>>

	<div class="wrap">
		<div class="wrap-up">
      <!--
      <div class="wrap-ng-tr"><img src="/wp-content/themes/public/img/newyear/ny-03.svg"></div>
      <div class="wrap-ng-tl"><img src="/wp-content/themes/public/img/newyear/ny-04.svg"></div>
      <div class="wrap-ng-left"><img src="/wp-content/themes/public/img/newyear/ny_snow01-01.svg"></div>
      <div class="wrap-ng-right"><img src="/wp-content/themes/public/img/newyear/ny_snow01-02.svg"></div>
    -->
			<div class="wrap-logo">
    		    <?php if (is_front_page() ) {
                echo'<img src="/wp-content/themes/public/img/logo.svg" alt="">';
                } else {
                echo '<a href="/"><img src="/wp-content/themes/public/img/logo.svg" alt=""></a>';
                } ?>
            </div>
			<div class="head">
				<div class="row">
					<div class="head-location"><a href="/#location" class="scroll">находимся на&nbsp;берегу ОБИ</a></div>
					<div class="head-phone">
                        <b>
                        <a href="tel:+73833835030" class="podmena" onclick="yaCounter47949776.reachGoal('click-phone'); ga('send', 'event', 'Главное меню', 'Позвонить'); return true;">
                                +7 383 383-50-30
                        </a>
                        </b>
                    </div>
					<div class="head-btn"><a href="javascript:void(0);" onclick="yaCounter47949776.reachGoal('bron-bani'); ga('send', 'event', 'Главное меню', 'Забронировать'); return true;" rel="nofollow" class="btn js-api ms_booking"><b>ЗАБРОНИРОВАТЬ</b> <span>БАНЬКУ ON-LINE</span></a></div>
				</div>
			</div>
			<div class="nav-open"><span></span></div>
			<div class="nav">
				<div class="row">
					<ul class="nav-menu nav-menu_left">
  					<?php wp_nav_menu( array( 'menu' => 'menu-left', 'items_wrap' => '%3$s', 'container' => '' ) ); ?>
					</ul>
					<ul class="nav-menu nav-menu_right">
						<?php wp_nav_menu( array( 'menu' => 'menu-right', 'items_wrap' => '%3$s', 'container' => '' ) ); ?>
					</ul>
				</div>
			</div>
