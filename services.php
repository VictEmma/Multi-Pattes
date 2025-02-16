<?php /* Template Name: Mes services */ ?>
<?php get_header(); ?>
<title>Tous les services</title>
</head>
    <h1>Mes services</h1>
    <section class="about">
        <div class="contain">
            <div class="first">
                <div class="icon-and-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                <h2>Garde chien pathologique</h2>
                </div>
                <h3><?php echo get_field('text_first'); ?></h3>
                <?php 
                $link = get_field('link_first'); 
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">En savoir +</a>
                <?php endif; ?>
            </div>
            <?php 
                $image = get_field('image_first'); 
                if ($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img">
                <?php endif; ?>

        </div>
        <div class="contain">
        <?php 
            $image = get_field('image_second'); 
            if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img">
            <?php endif; ?>
            <div class="first">
                <div class="icon-and-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                <h2>Parc de jeux canin</h2>
                </div>
                <h3><?php echo get_field('text_second'); ?></h3>
                <?php 
                $link = get_field('link_second'); 
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">En savoir +</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="contain">
            <div class="first">
                <div class="icon-and-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                <h2>Formatrice chien catégorisé</h2>
                </div>
                <h3><?php echo get_field('text_third'); ?></h3>
                <?php 
                $link = get_field('link_third'); 
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">En savoir +</a>
                <?php endif; ?>
            </div>
            <?php 
            $image = get_field('image_third'); 
            if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img">
            <?php endif; ?>
        </div>
        <div class="contain">
        <?php 
            $image = get_field('image_fourth'); 
            if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img">
            <?php endif; ?>
            <div class="first">
                <div class="icon-and-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                <h2>Préparation physique</h2>
                </div>
                <h3><?php echo get_field('text_fourth'); ?></h3>
                <?php 
                $link = get_field('link_fourth'); 
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">En savoir +</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="contain">
            <div class="first">
                <div class="icon-and-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                <h2>Remplacement poste ASV</h2>
                </div>
                <h3><?php echo get_field('text_five'); ?></h3>
                <?php 
                $link = get_field('link_five'); 
                if ($link): ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">En savoir +</a>
                <?php endif; ?>
            </div>
            <?php 
            $image = get_field('image_five'); 
            if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img">
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>