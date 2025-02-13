<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

  <header>
    <!-- Menu normal (PC) -->
    <ul class="menu-desktop">
      <li><a href="">Qui suis-je ?</a></li>
      <li><a href="">Mes services</a></li>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo_Text.svg" alt="Mon logo"></a>
      <li><a href="">Comment réserver ?</a></li>
      <li><a href="">Contact</a></li>
    </ul>

    <!-- Menu burger (Mobile) -->
    <div class="menu-mobile">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo_Text.svg" alt="Mon logo"></a>
      <a href="#" id="openBtn">
        <span class="burger-icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>
    </div>

    <!-- Contenu du menu mobile -->
    <div id="mySidenav" class="sidenav">
      <a id="closeBtn" href="#" class="close">×</a>
      <ul>
        <li><a href="#">A propos</a></li>
        <li><a href="#">Nos services</a></li>
        <li><a href="#">Témoignages</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </header>

  <script>
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = function () {
      sidenav.classList.add("active");
    };

    closeBtn.onclick = function () {
      sidenav.classList.remove("active");
    };
  </script>
