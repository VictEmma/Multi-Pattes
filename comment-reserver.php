<?php /* Template Name: Contactez-moi */ ?>
<?php get_header(); ?>

<h1>Me contacter</h1>

<section class="contact-section">
    <!-- Contact Info Section -->
    <div class="contact-info">
        <p>Pour profiter de mes services, n'hésitez pas à me contacter par mail ou par<br>téléphone !</p>
        <div class="phone-info">
            <img src="<?php echo get_template_directory_uri(); ?>/img/black-phone.png" alt="Phone Icon" class="icon">
            <span>+33 6 87 20 03 32</span>
        </div>
        <a href="tel:+33687200332" class="button">Me contacter !</a>
    </div>

    <div class="content-wrapper">
        <!-- Où me trouver Section -->
        <div class="info-section">
            <div class="info-box">
                <h2>Où me trouver ?</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22343.25489566852!2d5.567836471909561!3d45.572311540243284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6354a6efc59d41fd%3A0x39d6bc66817d82ca!2sMultipattes!5e0!3m2!1sfr!2sfr!4v1737016599200!5m2!1sfr!2sfr" width="500" height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Form Section -->
        <div class="info-section">
            <div class="info-box">
                <h2>Me contacter</h2>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Nom" required>
                        <input type="text" placeholder="Prénom" required>
                    </div>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Message" rows="4" required></textarea>
                    <button type="submit" class="button">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="info-section">
            <div class="info-box">
                <h2>Sur les réseaux</h2>
                <div class="social-icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tiktok-icon.png" alt="TikTok"></a>
                </div>
            </div>
        </div>

        <!-- Documents Section -->
        <div class="info-section">
            <div class="info-box">
                <h2>Documents</h2>
                <div class="document-links">
                    <a href="#" class="pdf-link">Contrat de Garde</a>
                    <a href="#" class="pdf-link">Règlement Intérieur du Parc de Jeu</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
