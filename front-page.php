<?php /* Template Name: acceuil */ ?>
<?php get_header(); ?>
<title>Accueil</title>
</head>
    <div class="ticker-wrapper">
  <div class="ticker">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_1'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_2'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_3'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_4'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_5'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_1'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_2'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_3'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_4'); ?></span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator" />
    <span><?php echo get_field('texte_defilant_5'); ?></span>
  </div>

</div>
<div class="video-background">
    <video autoplay muted loop>
        <source src="<?php echo esc_url(get_field('background_content')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
        <h1><?php echo get_field('text_video'); ?></h1>
    <a href="https://multi-pattes.fr/truffinoscope/" class="circle-button">
    <span class="button-text">Truffinoscope</span>
    </a>
</div>
<section class="start">
  <div class="bienvenue">
    <div class="t-photo">
    <?php 
// Récupérer le champ ACF 'img_pres'
$img_pres = get_field('logo_img');

// Vérifier si le tableau contient une clé 'url'
if (!empty($img_pres['url'])) {
    // Afficher l'image avec l'URL récupérée
    echo '<img src="' . esc_url($img_pres['url']) . '" alt="Logo">';
} else {
    // Message en cas d'absence d'URL
    echo 'Aucune image de présentation disponible.';
}
?>
      <div class="bloc-text">
        <h2>
        <?php echo get_field('phrase_bienv'); ?>
        </h2>
        <?php echo get_field('text_bienv'); ?>
      </div>
    </div>
<div class="youtube-video">
    <?php
// Récupérer le lien YouTube depuis un champ ACF
$youtube_link = get_field('ytb_link'); // Assurez-vous que 'ytb_link' correspond au nom exact de votre champ ACF

// Vérifier si le lien existe et extraire l'ID de la vidéo
if ($youtube_link) {
    // Nettoyer l'URL pour plus de sécurité
    $youtube_link = esc_url($youtube_link);

    // Fonction pour extraire l'ID de la vidéo depuis l'URL
    function getYouTubeId($url) {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return $query['v'] ?? null;
    }

    // Extraire l'ID de la vidéo
    $youtube_id = getYouTubeId($youtube_link);

    if ($youtube_id): ?>
        
            <iframe 
                width="560" 
                height="315" 
                src="https://www.youtube.com/embed/<?php echo htmlspecialchars($youtube_id); ?>" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
    <?php else: ?>
        <p>Vidéo non valide. Veuillez vérifier le lien YouTube dans le champ ACF.</p>
    <?php endif;
} else {
    echo '<p>Aucun lien YouTube trouvé dans le champ ACF.</p>';
}
?>

        </div>

  </div>
  </div>

  <div class="who-is">

  <?php 
// Récupérer le champ ACF 'img_pres'
$img_pres = get_field('img_pres');

// Vérifier si le tableau contient une clé 'url'
if (!empty($img_pres['url'])) {
    // Afficher l'image avec l'URL récupérée
    echo '<img src="' . esc_url($img_pres['url']) . '" alt="Image de présentation">';
} else {
    // Message en cas d'absence d'URL
    echo 'Aucune image de présentation disponible.';
}
?>

    <div class="who-text">
    
      <div class="title">
        <h2 class="custom-title">
          Qui suis-je ?
        </h2>
      </div>
      <p>
      <?php echo get_field('txt_pres'); ?>
      </p>
      <?php $monlien=get_field('lien_bouton');
      ?>
      <div class="button-container">
      <a class="button" href="<?php echo $monlien['url'] ?>" > <?php echo $monlien['title'] ?></a>
      </div>
  </div>
</section>
<section class="services">
  <div class="title">
    <h2 class="custom-title">
      Services proposés
    </h2>
  </div>
  <div class="grid-container"> 
  <div class="item item1">
  <?php 
  $img_guard = get_field('img_gard_patho');
  $lien_guard = get_field('lien_gard_patho');
  $lien_guard = is_array($lien_guard) ? $lien_guard['url'] ?? '' : $lien_guard;

  if (!empty($img_guard['url'])) {
      echo !empty($lien_guard) ? '<a href="' . esc_url($lien_guard) . '" target="_blank">' : '';
      echo '<img src="' . esc_url($img_guard['url']) . '" alt="Image Illustration">';
      echo !empty($lien_guard) ? '</a>' : '';
  } else {
      echo 'Aucune image de présentation disponible.';
  }
  ?>
    <div class="item-text">Garde de chien pathologique</div>
  </div>

  <div class="item item2">
  <?php 
  $img_park = get_field('img_park_canin');
  $lien_park = get_field('lien_park_canin');
  $lien_park = is_array($lien_park) ? $lien_park['url'] ?? '' : $lien_park;

  if (!empty($img_park['url'])) {
      echo !empty($lien_park) ? '<a href="' . esc_url($lien_park) . '" target="_blank">' : '';
      echo '<img src="' . esc_url($img_park['url']) . '" alt="Image Illustration">';
      echo !empty($lien_park) ? '</a>' : '';
  } else {
      echo 'Aucune image de présentation disponible.';
  }
  ?>
    <div class="item-text">Parc de jeu canin</div>
  </div>

  <div class="item item3">
  <?php 
  $img_dipl = get_field('img_diplom');
  $lien_dipl = get_field('lien_diplom');
  $lien_dipl = is_array($lien_dipl) ? $lien_dipl['url'] ?? '' : $lien_dipl;

  if (!empty($img_dipl['url'])) {
      echo !empty($lien_dipl) ? '<a href="' . esc_url($lien_dipl) . '" target="_blank">' : '';
      echo '<img src="' . esc_url($img_dipl['url']) . '" alt="Image Illustration">';
      echo !empty($lien_dipl) ? '</a>' : '';
  } else {
      echo 'Aucune image de présentation disponible.';
  }
  ?>
    <div class="item-text">Diplôme CESCCAM</div>
  </div>

  <div class="item item4">
  <?php 
  $img_phy = get_field('img_pre_phy');
  $lien_phy = get_field('lien_pre_phy');
  $lien_phy = is_array($lien_phy) ? $lien_phy['url'] ?? '' : $lien_phy;

  if (!empty($img_phy['url'])) {
      echo !empty($lien_phy) ? '<a href="' . esc_url($lien_phy) . '" target="_blank">' : '';
      echo '<img src="' . esc_url($img_phy['url']) . '" alt="Image Illustration">';
      echo !empty($lien_phy) ? '</a>' : '';
  } else {
      echo 'Aucune image de présentation disponible.';
  }
  ?>
    <div class="item-text">Préparation physique</div>
  </div>

  <div class="item item5">
  <?php 
  $asv = get_field('img_asv');
  $lien_asv = get_field('lien_asv');
  $lien_asv = is_array($lien_asv) ? $lien_asv['url'] ?? '' : $lien_asv;

  if (!empty($asv['url'])) {
      echo !empty($lien_asv) ? '<a href="' . esc_url($lien_asv) . '" target="_blank">' : '';
      echo '<img src="' . esc_url($asv['url']) . '" alt="Image Illustration">';
      echo !empty($lien_asv) ? '</a>' : '';
  } else {
      echo 'Aucune image de présentation disponible.';
  }
  ?>
    <div class="item-text">Remplacement de poste ASV</div>
  </div>
</div>


<div class="button-container">
<?php $services=get_field('tous_les_services');
      ?>
      <a class="button" href="<?php echo $services['url'] ?>" >Tous les services</a>
</div>

</section>
<section class="end">
    <div class="title">
        <h2 class="custom-title">Mes retours clients</h2>
    </div>
        <?php if (have_rows('carrousel_images')): ?>
            <div class="custom-carousel">
                <div class="carousel-container">
                    <?php 
                    $images = []; 
                    while (have_rows('carrousel_images')): the_row(); 
                        $image = get_sub_field('image');
                        if ($image): 
                            $images[] = esc_url($image['url']);
                        endif;
                    endwhile;
                    ?>

                    <?php if (!empty($images)): ?>
                        <img id="carousel-image" src="<?php echo $images[0]; ?>" alt="Carrousel">
                    <?php endif; ?>
                </div>

                <!-- Boutons de navigation -->
                <div class="carousel-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carrousel_button.svg" alt="Précédent">
                </div>
                <div class="carousel-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carrousel_button.svg" alt="Suivant" class="reverse">
                </div>
            </div>

            <!-- On passe les images en JSON pour le script -->
            <script>
                var carouselImages = <?php echo json_encode($images); ?>;
            </script>
        <?php endif; ?>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0;
    const imgElement = document.getElementById("carousel-image");
    const prevButton = document.querySelector(".carousel-button-prev");
    const nextButton = document.querySelector(".carousel-button-next");

    if (!carouselImages || carouselImages.length === 0) {
        console.error("Aucune image trouvée pour le carrousel.");
        return;
    }

    function updateImage(index) {
        imgElement.style.opacity = 0;
        setTimeout(() => {
            imgElement.src = carouselImages[index];
            imgElement.style.opacity = 1;
        }, 300);
    }

    prevButton.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + carouselImages.length) % carouselImages.length;
        updateImage(currentIndex);
    });

    nextButton.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % carouselImages.length;
        updateImage(currentIndex);
    });
});
</script>

<?php get_footer(); ?>