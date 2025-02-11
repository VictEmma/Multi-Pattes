<?php /* Template Name: Essai */ ?>
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
                    <p>+33 6 87 20 03 32</p>
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
                    <a href="https://www.facebook.com/p/Multi-pattes-100085392571223/"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-logo.png" alt="Réseaux sociaux" ></a>
                    <a href="https://www.instagram.com/multipattes38/"><img src="<?php echo get_template_directory_uri(); ?>/img/ig-color.png" alt="Réseaux sociaux"></a>
                    <a href="lien.com"><img src="<?php echo get_template_directory_uri(); ?>/img/tiktok-color.png" alt="Réseaux sociaux" ></a>
                </div>
                </div>
                <div class="title2">
                    <h2 class="custom-title">Documents</h2>
                    <div class="docs">
                        <a href="document.pdf"><img src="<?php echo get_template_directory_uri(); ?>/img/file.png" alt="Réseaux sociaux" class="img-docs"></a>
                        <p class="type-docs">Contrat de Garde</p>
                    </div>
                </div>
            </div>
      </section>
</body>
</html>
<?php get_footer(); ?>
