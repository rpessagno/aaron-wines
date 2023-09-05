<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GC2T5WML4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GC2T5WML4J');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="https://use.typekit.net/qwi5ewx.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- Icons -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/touch-icon.png">

<!-- App -->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="application-name" content="Aaron Wines" />
<meta name="apple-mobile-web-app-title" content="Aaron Wines">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1399755556828091'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1399755556828091&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Tock -->
<script>
!function(t,o,c,k){if(!t.tock){var e=t.tock=function(){e.callMethod?
e.callMethod.apply(e,arguments):e.queue.push(arguments)};t._tock||(t._tock=e),
e.push=e,e.loaded=!0,e.version='1.0',e.queue=[];var f=o.createElement(c);f.async=!0,
f.src=k;var g=o.getElementsByTagName(c)[0];g.parentNode.insertBefore(f,g)}}(
window,document,'script','https://www.exploretock.com/tock.js');

tock('init', 'aaronwines');
</script>
<!-- / Tock -->

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7FC7ZX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
$page_id = get_the_ID();
$header_style = get_field('header_style', $page_id);
?>

<header class="header">
  <a href="<?php the_permalink('2'); ?>" class="header-logo">
    <?php echo file_get_contents(get_template_directory() . '/assets/images/global/aaron-logo-white.svg'); ?>
  </a>
  <nav class="header-nav">

    <?php wp_nav_menu( array( 'menu' => 'main' ) ); ?>

    <div class="header-shop">
      <ul class="header-shop-items">
        <li class="header-shop-item">
          <a href="https://shop.aaronwines.com/index.cfm?method=cartV2.showCart" class="header-shop-cart js-modal-cart">
            <?php echo file_get_contents(get_template_directory() . '/assets/images/global/cart.svg') ?>
            Cart <span class="header-shop-cart-count hide">0</span>
          </a>
        </li>
        <li class="header-shop-item">
          <a href="https://shop.aaronwines.com/index.cfm?method=memberEditAccount.editProfile">
            <?php echo file_get_contents(get_template_directory() . '/assets/images/global/account.svg') ?>
            Account
          </a>
        </li>
      </ul>
    </div>

  </nav>
  <button class="header-nav-button">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
  </button>
</header>

<div v65remotejs="modalCart"></div>
