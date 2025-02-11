<?php /* Template Name: Truffinoscope */ ?>
<?php get_header(); ?>

<h1>Truffinoscope</h1>

<section class="about">
    <div class="coucou">
        <h2>Qu'est-ce que c'est ?</h2>
    </div>
    <p><?php 
    $introduction = get_field('introduction'); 
    if ($introduction) {
        echo $introduction; // Affichage direct car c'est du contenu WYSIWYG
    }
?>
    </p>
    <?php if (have_rows('pensionnaire')): ?>
    <div class="gallery">
        <?php while (have_rows('pensionnaire')): the_row(); 
            $image = get_sub_field('photo_pensionnaire'); // Récupère l'image
            $nom = get_sub_field('nom_pensionnaire'); // Récupère le nom
        ?>
        <div class="gallery-item">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($nom); ?>">
            <h2><?php echo esc_html($nom); ?></h2>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

</section>


<?php get_footer(); ?>