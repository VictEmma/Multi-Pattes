<?php /* Template Name: TOUS LES SERVICES */ ?>
<?php get_header(); ?>
<h1>
    <?php echo get_field('introduction'); ?> 
</h1>
<section class="principal">
    <h2>
        <?php echo get_field('introduction'); ?> 
    </h2>
    <div class="content">
    <?php 
    $blocs = get_field('blocks');

    if ($blocs && is_array($blocs)) { 
        foreach ($blocs as $bloc) { 
            if (!empty($bloc['text'])) {
                echo "<p>" . esc_html($bloc['text']) . "</p>";
            }
            if (!empty($bloc['image']['url'])) {
                echo '<img src="' . esc_url($bloc['image']['url']) . '" alt="Image de présentation">';
            }
        }
    } else {
        echo "<p>Aucun contenu disponible.</p>";
    }
    ?>
</div>

    <p class="end-text">
    <?php echo get_field('text'); ?>
    </p>
    <p class="price">
    <?php echo get_field('price'); ?>
    </p>
</section>
<?php get_footer(); ?>