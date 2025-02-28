<?php /* Template Name: TOUS LES SERVICES */ ?>
<?php get_header(); ?>
<title><?php echo get_field('nom_du_service'); ?></title>
</head>

<h1>
    <?php echo get_field('nom_du_service'); ?> 
</h1>

<section class="principal">

        <?php
            $intro = get_field('introduction');
            if ($intro) {
            echo '<div class="intro">' . wp_kses_post($intro) . '</div>';
            }
        ?>  

    <div class="content">
        <?php 
        $blocs = get_field('blocks');

        foreach ($blocs as $key => $bloc) {
            echo '<div class="bloc">';
            
            // Transformer le texte pour éviter les <p> et <br> problématiques
            $texte = apply_filters('the_content', $bloc['text']); // Applique les filtres WP
            $texte = str_replace(array('<p>', '</p>'), array('<div>', '</div>'), $texte); // Remplace <p> par <div>
            $texte = str_replace('<br>', ' ', $texte); // Remplace <br> par un espace pour éviter les sauts de ligne qui cassent le flex
            
            if ($key % 2 == 0) { // Texte avant image
                echo "<div class='bloc-texte'>{$texte}</div>"; 
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
            } else { // Image avant texte
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
                echo "<div class='bloc-texte'>{$texte}</div>";
            }
            
            echo '</div>';
        }
        ?>
    </div>        
</section>
<section class="end">
    <?php if (get_field('text')) : ?>
        <div class="end-text">
            <?php echo get_field('text'); ?>
        </div>
    <?php endif; ?>

    <?php if (get_field('price') || get_field('contact-me')) : ?>
        <div class="price-contact">
            <?php if (get_field('price')) : ?>
                <div class="price has-price">
                    <?php echo get_field('price'); ?>
                </div>
            <?php endif; ?>

            <?php $monlien = get_field('contact-me'); ?>
            <?php if ($monlien) : ?>
                <a class="button" href="<?php echo esc_url($monlien['url']); ?>">
                    Contactez moi !
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>