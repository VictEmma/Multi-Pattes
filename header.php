<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <meta name="description" content="">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
  <title>Mon site internet</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <ul>
      <li><a href="">Qui suis-je ?</a></li>
      <li><a href="">Mes services</a></li>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/Logo_Text.svg" alt="Mon logo"></a>
      <li><a href="">Comment réserver ?</a></li>
      <li><a href="">Contact</a></li>
    </ul>
</header>