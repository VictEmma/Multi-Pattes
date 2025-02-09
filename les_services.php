<?php /* Template Name: TOUS LES SERVICES */ ?>
<?php get_header(); ?>
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
                echo "<div class='bloc-texte'>{$bloc['text']}</div>";
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
<section class="end">
    <p class="end-text">
    <?php echo get_field('text'); ?>
    </p>
    <div class ="price-contact">
        <p class="price">
        <?php echo get_field('price'); ?>
        </p>
        <?php $monlien=get_field('contact-me');?>
        <a class="button" href="<?php echo $monlien['url'] ?>" > <?php echo $monlien['title'] ?></a>
    </div>
</section>
<?php get_footer(); ?>