<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="https://fonts.googleapis.com/css?family=IM+Fell+English" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="winedirect.css" />

<!-- jQuery is required here for WineDirect remote widgets to work -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</head>

<body class="winedirect">

<header class="header light">
  <nav class="header-nav">
    <button class="header-nav-button">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </button>
    <ul class="header-nav-items">
      <li class="header-nav-item"><a href="/">Home</a></li>
      <li class="header-nav-item"><a href="#">Aaron</a></li>
      <li class="header-nav-item"><a href="#">Aequorea</a></li>
      <li class="header-nav-item"><a href="#">Wines</a></li>
      <li class="header-nav-item"><a href="#">Club</a></li>
      <li class="header-nav-item"><a href="#">Visit</a></li>
      <li class="header-nav-item"><a href="#">Contact</a></li>
      <li class="header-nav-item login"><a href="/account">Login</a></li>
    </ul>
    <ul class="header-utility-items">
      <li class="header-utility-item">
        <a href="/cart">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
          <path id="Layer_2" d="M79.4,18.9h-7.3C70.2,6.7,58.8-1.6,46.6,0.3c-9.6,1.5-17.2,9-18.7,18.7h-7.3c-6.1,0-11.1,4.9-11.2,11.1
            c0,0,0,0,0,0v58.9c0,6.1,5,11.1,11.1,11.1h58.9c6.1,0,11.1-5,11.1-11.1V30C90.5,23.9,85.6,18.9,79.4,18.9z M50,7.1
            c7.1,0,13.2,4.9,14.9,11.8H35.1C36.7,12,42.9,7.2,50,7.1z M83.4,88.9c0,2.2-1.8,4-4,4l0,0H20.6c-2.2,0-4-1.8-4-4V30c0-2.2,1.8-4,4-4
            l0,0h58.9c2.2,0,4,1.8,4,4l0,0l0,0V88.9z"/>
          </svg>
          <!-- <span class="cart-count" id="vs2-accountLinks-cart-count">0</span> -->
        </a>
      </li>
      <li class="header-utility-item">
        <a href="/account">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
          <path d="M50,6.7c7,0,12.5,2.7,15.5,7.7c5.1,8.5,3,22.8-5.8,39.4c-2.8,5.3-3.2,10.2-1.3,14.5c3.8,8.3,14.8,10.8,26.4,13.5l0.4,0.1
            c7.7,1.8,8,3.6,8,11.3c-0.1,0.1-0.2,0.2-0.5,0.2H7.2c-0.2,0-0.4-0.1-0.5-0.5c0.1-7.4,0.4-9.2,8.1-11l1.3-0.3
            c11.3-2.6,21.9-5.1,25.6-13.4c1.9-4.3,1.5-9.2-1.4-14.4c-8.9-16.3-11-30.6-5.9-39.2C37.4,9.5,42.9,6.7,50,6.7 M50,0
            C28.8,0,14.7,20.6,34.4,57c6.7,12.3-7.2,15.1-21.2,18.4C1.6,78.1,0.1,83.5-0.1,92.8c-0.1,4,3.2,7.2,7.2,7.2h85.7
            c4,0,7.3-3.2,7.2-7.2c-0.1-9.3-1.6-14.7-13.2-17.4C72.4,72.1,59.1,69.2,65.6,57C85.2,19.8,70.8,0,50,0L50,0z"/>
          </svg>

        </a>
      </li>
    </ul>
  </nav>
  <button class="header-nav-close"></button>
</header>

<?php //include('inc/modal-cart.php'); ?>
<?php //include('inc/modal-container.php'); ?>