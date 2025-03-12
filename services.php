<?php /* Template Name: Mes services */ ?>
<?php get_header(); ?>
<title>Tous les services</title>
</head>
    <h1>Mes services</h1>
    <section class="about">
        <?php 
        $services = [
            [
                "title" => "Garde chien pathologique",
                "text" => get_field('text_first'),
                "link" => get_field('link_first'),
                "image" => get_field('image_first')
            ],
            [
                "title" => "Parc de jeux canin",
                "text" => get_field('text_second'),
                "link" => get_field('link_second'),
                "image" => get_field('image_second')
            ],
            [
                "title" => "Formatrice chien catégorisé",
                "text" => get_field('text_third'),
                "link" => get_field('link_third'),
                "image" => get_field('image_third')
            ],
            [
                "title" => "Préparation physique",
                "text" => get_field('text_fourth'),
                "link" => get_field('link_fourth'),
                "image" => get_field('image_fourth')
            ],
            [
                "title" => "Remplacement poste ASV",
                "text" => get_field('text_five'),
                "link" => get_field('link_five'),
                "image" => get_field('image_five')
            ]
        ];

        foreach ($services as $index => $service) : ?>
            <div class="contain">
                <?php if ($index % 2 !== 0 && $service['image']) : ?>
                    <img src="<?php echo esc_url($service['image']['url']); ?>" alt="<?php echo esc_attr($service['image']['alt']); ?>" class="img">
                <?php endif; ?>
                
                <div class="first">
                    <div class="icon-and-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Motif patte" class="icon" />
                        <h2><?php echo esc_html($service['title']); ?></h2>
                    </div>
                    <h3><?php echo wp_kses_post($service['text']); ?></h3>
                    
                    <?php 
                    if (!empty($service['link']) && is_array($service['link']) && isset($service['link']['url'])) : ?>
                        <a class="button" href="<?php echo esc_url($service['link']['url']); ?>">En savoir +</a>
                    <?php endif; ?>
                </div>

                <?php if ($index % 2 === 0 && $service['image']) : ?>
                    <img src="<?php echo esc_url($service['image']['url']); ?>" alt="<?php echo esc_attr($service['image']['alt']); ?>" class="img">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>
<?php get_footer(); ?>
