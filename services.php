<?php /* Template Name: Mes services */ ?>
<?php get_header(); ?>

    <h1>Mes services</h1>
    <section class="about">
        <span>
        <div class="first">
            <div class="icon-and-text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
            <h2>Garde chien pathologique</h2>
            </div>
            <h3>Vous êtes en quête d'une personne à qui confier<br>votre chien âgé ou handicapé ? Ne cherchez plus !</h3>
            <a class="button" href="<?php echo $services['url'] ?>" > <?php echo $services['title'] ?></a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="Rééducation" class="img">
        <span>

        <div class="first">
            <div class="icon-and-text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
            <h2>Parc de jeux canin</h2>
            </div>
            <h3>Un parc avec tout ce qu'il faut pour que votre<br>toutou d'amour s'amuse en sécurité !</h3>
            <a class="button" href="<?php echo $services['url'] ?>" > <?php echo $services['title'] ?></a>
        </div>
        <div class="first">
            <div class="icon-and-text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
            <h2>Formatrice chien catégorisé</h2>
            </div>
            <h3>Vous souhaitez obtenir le diplôme vous<br>autorisant à avoir un chien catégorisé ? Bonne<br>nouvelle, je peux vous faire passer la formation !</h3>
            <a class="button" href="<?php echo $services['url'] ?>" > <?php echo $services['title'] ?></a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="Rééducation" class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="Rééducation" class="img">
        <div class="first">
            <div class="icon-and-text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
            <h2>Préparation physique</h2>
            </div>
            <h3>Votre toutou a besoin de récupération physique ?<br>Je peux les aider à se remettre en jambes<br>(ou en pattes) !</h3>
            <a class="button" href="<?php echo $services['url'] ?>" > <?php echo $services['title'] ?></a>
        </div>
        <div class="first">
            <div class="icon-and-text">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
            <h2>Remplacement poste ASV</h2>
            </div>
            <h3>Vous êtes vétérinaire, et vous souhaitez un renfort<br>ou un remplacement ?</h3>
            <a class="button" href="<?php echo $services['url'] ?>" > <?php echo $services['title'] ?></a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sample.png" alt="Rééducation" class="img">
    </section>

<?php get_footer(); ?>