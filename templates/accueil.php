<?php
/**
    * Template Name: Accueil
*/
?>

<?php get_header(); ?>
    <div class="ticker-wrapper">
  <div class="ticker">
  <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Au cœur de la région Auvergne-Rhône Alpes, à Chimilin</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Votre service de garde de chiens handicapés et âgés</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Au cœur de la région Auvergne-Rhône Alpes, à Chimilin</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Votre service de garde de chiens handicapés et âgés</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Au cœur de la région Auvergne-Rhône Alpes, à Chimilin</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Votre service de garde de chiens handicapés et âgés</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Au cœur de la région Auvergne-Rhône Alpes, à Chimilin</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="separator">
    <span>Votre service de garde de chiens handicapés et âgés</span>
  </div>

</div>
<div class="video-background">
    <video autoplay muted loop>
        <source src="<?php echo esc_url(get_field('background_content')); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de cette vidéo.
    </video>
        <h1>Le bien-être canin,
        mon engagement. </h1>
</div>
<section class="start">
  <div class="bienvenue">
    <div class="t-photo">
      <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/Logo-Multi-pattes-2024-1.png" alt="Logo dessiné">
      <div class="bloc-text">
        <h2>
            Bienvenue chez 
            <br>
            Multi Pattes !
        </h2>
        <p>
        Multi Pattes est une entreprise qui a pour but de rendre service aux
        <br>
        propriétaires de chiens à pathologies et surtout, à leurs amis à pattes.
        <br>
        Que ce soit pour de la garde, de la préparation physique, ou encore 
        <br>
        pour une formation sur les chiens catégorisés, vous êtes au bon 
        <br>
        endroit !
        </p>
      </div>
    </div>
    <?php
$youtube_id = "PGrNO5zYXyg"; // Remplacez par votre ID de vidéo YouTube
?>
  <div class="youtube-video">
    <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
  </div>
  </div>
  <div class="who-is">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Photo de Fabienne Guinet">
    <div class="who-text">
      <div class="title">
      <h2>
        Qui suis-je ?
      </h2>
      </div>
      <p>
      Vous possédez un chien âgé ou handicapé, et vous ne <br> 
      trouvez personne pour s’en occuper lors de vos <br> 
      absences ? Vous cherchez un parc adapté dans lequel <br> 
      votre compagnon quadrupède pourrait s’épanouir ? <br>
      Je suis Fabienne Guinet, à Chimilin, au cœur de la <br> 
      région Auvergne Rhône Alpes !
      </p>
    <div class="button">
      <a href="http://projet-multipattes.test/a-propos-de-moi/">En savoir plus</a>
    </div>
  </div>
</section>
<section class="services">
  <div class="title">
    <h2>
      Services proposés
    </h2>
  </div>
<div class="grid-container">
  <div class="item item1">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Garde de chien pathologique">
    <div class="item-text">Garde de chien pathologique</div>
  </div>
  <div class="item item2">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Parc de jeu canin">
    <div class="item-text">Parc de jeu canin</div>
  </div>
  <div class="item item3">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Diplôme CESCCAM">
    <div class="item-text">Diplôme CESCCAM</div>
  </div>
  <div class="item item4">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Préparation physique">
    <div class="item-text">Préparation physique</div>
  </div>
  <div class="item item5">
    <img src="http://projet-multipattes.test/wp-content/uploads/2025/01/20240127_190206-scaled.jpg" alt="Remplacement de poste ASV">
    <div class="item-text">Remplacement de poste ASV</div>
  </div>
</div>
  <div class="button">
    <h2>
      Tous les services
    </h2>
  </div>
</section>
<section class="end">
  <div class="title">
    <h2>
      Mes retours clients
    </h2>
  </div>
</section>
<?php get_footer(); ?>
