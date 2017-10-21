<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="https://fonts.googleapis.com/css?family=IM+Fell+English" rel="stylesheet">

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

</head>

<body <?php body_class(); ?>>

<?php
$page_id = get_the_ID();
$header_style = get_field('header_style', $page_id);
?>

<header class="header <?php echo $header_style == '1' ? 'light' : 'dark'; ?>">
  <nav class="header-nav">
    <div class="header-nav-logo">
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-white.svg" alt="Aaron" class="light">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="dark">
      </a>
    </div>

    <button class="header-nav-button">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </button>
    <ul class="header-nav-items">
      <li class="header-nav-item"><a href="/">Home</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('5'); ?>"<?php if ($page_id == '5') { echo ' class="active"'; } ?>>Aaron</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('7'); ?>"<?php if ($page_id == '7') { echo ' class="active"'; } ?>>Aequorea</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('24'); ?>"<?php if ($page_id == '24') { echo ' class="active"'; } ?>>Shop</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('28'); ?>"<?php if ($page_id == '28') { echo ' class="active"'; } ?>>Club</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('30'); ?>"<?php if ($page_id == '30') { echo ' class="active"'; } ?>>Visit</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('32'); ?>"<?php if ($page_id == '32') { echo ' class="active"'; } ?>>Contact</a></li>
    </ul>
    <ul class="header-utility-items">
      <li class="header-utility-item">
        <a href="/cart">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/cart.svg') ?>
          <span class="cart-count" id="vs2-accountLinks-cart-count">0</span>
        </a>
      </li>
      <li class="header-utility-item">
        <a href="/account">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/account.svg') ?>
        </a>
      </li>
    </ul>
  </nav>
  <button class="header-nav-close"></button>
</header>

<div id="vs2-cart-confirmation">
  <p>This item has been added to your cart.</p>
  <a href="/cart" class="button">Review Your Cart</a>
</div>
