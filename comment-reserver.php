<?php /* Template Name: Comment réserver ? */ ?>
<?php get_header(); ?>
<title>Comment réserver ?</title>
</head>
<h1>Comment réserver ?</h1>
<section class="how_to">
    <div class="contact-info">
        <?php echo get_field('intro_text'); ?>
        <div class="phone-info">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/black-phone.png" alt="Phone Icon" class="icon">
                <?php echo get_field('phone_number'); ?>
            </div>
            <a href="tel:+33687200332" class="button" rel="noopener" aria-label="Appeler le 06 87 20 03 32">Me contacter !</a>
        </div>
    </div>
    
    <div class="content-wrapper">
        <div class="info-section">
            <div class="info-box">
                <div class="title">
                <h2 class="custom-title ">À savoir</h2>
                </div>
                <?php echo get_field('explain_text'); ?>
                <a href="mailto:contact@multipattes.fr" class="button">Me contacter !</a>
            </div>
        </div>
    <div class="image-section">
    <?php 
        $image = get_field('image'); 
        if ($image): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: 'Chien'); ?>" class="dog-image">
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>