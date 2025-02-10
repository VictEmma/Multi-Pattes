<footer>
  <div class="footer-container">
    <!-- Section Logo -->
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Logo.svg" alt="Multi Pattes Logo">
    </div>

    <!-- Section Informations -->
    <div class="footer-info">
      <ul>
        <li class="legal"><a href="#mentions-legales">Mentions légales</a></li>
        <li class="reserver"><a href="#comment-reserver">Comment réserver ?</a></li>
        <li class="services"><a href="#mes-services">Mes services</a></li>
      </ul>
    </div>

    <!-- Section Contact -->
    <div class="footer-contact">
      <p class="contact">Contact</p>
      <div class="contact-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="Téléphone">
        <p class="num">06 87 20 04 32</p>
      </div>
      <div class="contact-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/house.svg" alt="Adresse">
        <p class="adress">Chimilin, France</p>
      </div>
    </div>

    <!-- Section Réseaux Sociaux -->
    <div class="footer-socials">
      <a href="./who_i_am.php" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Facebook-Logo.png" alt="Facebook"></a>
      <a href="URL-TIKTOK" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/TikTok-Logo.png" alt="TikTok"></a>
      <a href="URL-INSTAGRAM" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Instagram-Logo.png" alt="Instagram"></a>
    </div>
  </div>

  <!-- Pattes SVG -->
  <div class="footer-paws">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Patounne.svg" alt="Patte">
  </div>
</footer>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Script pour le carrousel -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    let images = <?php echo json_encode($images); ?>;
    let currentIndex = 0;
    const imgElement = document.getElementById("carousel-image");
    const prevButton = document.querySelector(".carousel-button-prev");
    const nextButton = document.querySelector(".carousel-button-next");

    prevButton.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        imgElement.src = images[currentIndex];
    });

    nextButton.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % images.length;
        imgElement.src = images[currentIndex];
    });
});
</script>
</body>
</html>