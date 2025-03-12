<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://ton-site.com/sitemap.xml">
    <meta name="description" content="<?php bloginfo('description'); ?>">
</head>
<body <?php body_class(); ?>>

  <header>
    <!-- Menu normal (PC) -->
    <ul class="menu-desktop">
      <li><a href="https://multi-pattes.fr/qui-suis-je/">Qui suis-je ?</a></li>
      <li><a href="https://multi-pattes.fr/services/">Mes services</a></li>
      <a href="https://multi-pattes.fr/"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo_Text.svg" alt="Mon logo"></a>
      <li><a href="https://multi-pattes.fr/comment-reserser/">Comment réserver ?</a></li>
      <li><a href="https://multi-pattes.fr/contacts/">Contact</a></li>
    </ul>

    <!-- Menu burger (Mobile) -->
    <div class="menu-mobile">
    <a href="https://multi-pattes.fr/"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo_Text.svg" alt="Mon logo"></a>
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
        <li><a href="https://multi-pattes.fr/qui-suis-je/">Qui suis-je ?</a></li>
        <li><a href="https://multi-pattes.fr/services/">Mes services</a></li>
        <li><a href="https://multi-pattes.fr/comment-reserser/ ">Comment réserver ?</a></li>
        <li><a href=" https://multi-pattes.fr/truffinoscope/ ">Truffinoscope</a></li>
        <li><a href="https://multi-pattes.fr/contacts/">Contact</a></li>
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
