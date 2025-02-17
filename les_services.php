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
        echo '<h2 class="intro">' . wp_kses_post($intro) . '</h2>'; 
    }
    ?>
    <div class="content">
        <?php 
        $blocs = get_field('blocks');

        foreach ($blocs as $key => $bloc) {
            echo '<div class="bloc">';
            if ($key % 2 == 0) { // Texte avant image
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
                echo "<div class='bloc-texte'>{$bloc['text']}</div>";
            } else { // Image avant texte
                echo "<p>{$bloc['text']}</p>";
                echo "<img src='{$bloc['image']['url']}' alt='Image de présentation'>";
            }
            echo '</div>';
        }
        ?>
    </div>
</section>
<section class="end">
    <div class="end-text">
    <?php echo get_field('text'); ?>
    </div>
    <div class ="price-contact">
        <div class="price <?php echo esc_attr(get_field('price') ? 'has-price' : 'no-price'); ?>">
    <?php echo get_field('price'); ?>
</div>

        <?php $monlien=get_field('contact-me');?>
        <a class="button" href="<?php echo $monlien['url'] ?>" > <?php echo $monlien['title'] ?></a>
    </div>
</section>
<?php get_footer(); ?>