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

        foreach ($blocs as $key => $bloc) {
            echo '<div class="bloc">';
            if ($key % 2 == 0) { // Texte avant image
                echo "<p>{$bloc['text']}</p>";
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
            } else { // Image avant texte
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
                echo "<p>{$bloc['text']}</p>";
            }
            echo '</div>';
        }
        ?>
    </div>
</section>
    <p class="end-text">
    <?php echo get_field('text'); ?>
    </p>
    <p class="price">
    <?php echo get_field('price'); ?>
    </p>
</section>
<?php get_footer(); ?>