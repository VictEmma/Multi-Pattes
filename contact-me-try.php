<?php /* Template Name: Me contacter */ ?>
<?php get_header(); ?>
   <title>Me contacter</title>
</head>
<body>
   <h1>Me contacter</h1>
      <section class="about">
            <div class="additional">
            <div>
            <div class="title">
             <h2 class="custom-title">Où me trouver ?</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22343.25489566852!2d5.567836471909561!3d45.572311540243284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6354a6efc59d41fd%3A0x39d6bc66817d82ca!2sMultipattes!5e0!3m2!1sen!2sfr!4v1736845489528!5m2!1sen!2sfr" width="414" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
              
                <form>
                <h2 class="custom-title">Me contacter</h2>
                <div class="ineedflex">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black-phone.png" alt="phone" width="25" height="25">
                    <?php echo get_field('phone_number'); ?>
            </div>
                        <div class="form-group">
                            <input type="text" placeholder="Nom" required>
                            <input type="text" placeholder="Prénom" required>
                        </div>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Message" rows="4" required></textarea>
                    <button type="submit" class="button">Envoyer</button>
                </form>
            </div>
            <div class="img-txt">
                <div class="title">
                    <h2 class="custom-title">Sur les réseaux</h2>
                <div class="reseaux">
                                <?php 
                    $facebook = get_field('facebook_link');
                    $instagram = get_field('instagram_link');
                    $tiktok = get_field('tiktok_link');

                    if (!empty($facebook['url'])) : ?>
                        <a href="<?php echo esc_url($facebook['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fb-logo.png" alt="Facebook">
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($instagram['url'])) : ?>
                        <a href="<?php echo esc_url($instagram['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ig-color.png" alt="Instagram">
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($tiktok['url'])) : ?>
                        <a href="<?php echo esc_url($tiktok['url']); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tiktok-color.png" alt="TikTok">
                        </a>
                    <?php endif; ?>
                </div>
                </div>
                    <div class="title2">
                        <h2 class="custom-title">Documents</h2>
                        <?php 
                        $document = get_field('document');
                        if (!empty($document['url'])) : ?>
                            <div class="docs">
                    <a href="<?php echo esc_url($document['url']); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/file.png" alt="Document" class="img-docs">
                    </a>
                    <p class="type-docs">Contrat de Garde</p>
                    </div>
                    <?php endif; ?>
                </div>           
            </div>
      </section>
</body>
</html>
<?php get_footer(); ?>
