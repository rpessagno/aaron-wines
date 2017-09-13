<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Roboto+Slab:100,300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- Icons -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/global/favicon.ico" type="image/x-icon">
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
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-white.svg" alt="Aaron" class="dark">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="light">
      </a>
    </div>
    <button class="header-nav-button">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </button>
    <ul class="header-nav-items">
      <li class="header-nav-item"><a href="<?php echo the_permalink('5'); ?>">Aaron</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('7'); ?>">Aequorea</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('24'); ?>">Shop</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('28'); ?>">Club</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('30'); ?>">Visit</a></li>
      <li class="header-nav-item"><a href="<?php echo the_permalink('32'); ?>">Contact</a></li>
    </ul>
  </nav>
  <button class="header-nav-close"></button>
</header>