<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48585744-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-48585744-1', {
    'linker': {
      'domains': ['aaronwines.com', 'shop.aaronwines.com']
    }
  });
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- <link href="https://fonts.googleapis.com/css?family=IM+Fell+English" rel="stylesheet"> -->
<link rel="stylesheet" href="https://use.typekit.net/qwi5ewx.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- Icons -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/touch-icon.png">

<!-- App -->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="application-name" content="App Short Name" />
<meta name="apple-mobile-web-app-title" content="App Full Name">
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

</head>

<body <?php body_class(); ?>>

<?php
$page_id = get_the_ID();
$header_style = get_field('header_style', $page_id);
?>

<header class="header">
  <a href="<?php the_permalink('2'); ?>" class="header-logo">
    <?php echo file_get_contents(get_template_directory() . '/assets/images/global/aaron-logo-white.svg'); ?>
  </a>
  <nav class="header-nav">
    <button class="header-nav-button">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </button>

    <?php wp_nav_menu( array( 'menu' => 'main' ) ); ?>
      <!-- <li class="header-nav-item login"><a href="https://shop.aaronwines.com/index.cfm?method=memberEditAccount.editProfile">Login</a></li> -->

    <ul class="header-utility-items">
      <li class="header-utility-item">
        <a href="https://shop.aaronwines.com/index.cfm?method=cartV2.showCart">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/cart.svg') ?>
        </a>
      </li>
      <li class="header-utility-item">
        <a href="https://shop.aaronwines.com/index.cfm?method=memberEditAccount.editProfile">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/account.svg') ?>
        </a>
      </li>
    </ul>
  </nav>
  <button class="header-nav-close"></button>
</header>

<div v65remotejs="modalCart"></div>
