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
        echo "<pre>";
        //var_dump($bloc);
        echo "</pre>";

        //echo $bloc['text'];
        //echo $bloc['image']['url'];
    }
   ?>
    <p><?php echo $bloc['text']; ?></p>
    <img src="<?php echo $bloc['image']['url']; ?>" alt="Image de présentation">
</div>

    <p class="end-text">
    <?php echo get_field('text'); ?>
    </p>
    <p class="price">
    <?php echo get_field('price'); ?>
    </p>
</section>
<?php get_footer(); ?>