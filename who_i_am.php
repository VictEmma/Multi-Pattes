<?php /* Template Name: Qui suis-je ? */ ?>
<?php get_header(); ?>
   <h1>
      Qui suis-je ?
   </h1>
      <section class="about">
      <div class="intro-text">
               <?php echo get_field('intro_who'); ?>
      </div>
   <div class="img-txt">
  <div>
      <p><?php echo get_field('explain_text'); ?></p>
      <?php 
         $monlien = get_field('truffinoscope');
         if (!empty($monlien) && !empty($monlien['url'])) {
            echo '<a class="button" href="' . esc_url($monlien['url']) . '">Truffinoscope</a>';
         } else {
            echo '<p>Le lien Truffinoscope n\'est pas disponible.</p>';
         }
      ?>
   </div>
   <div>
      <?php 
         $img_pres = get_field('image');
         if (!empty($img_pres) && !empty($img_pres['url'])) {
            echo '<img src="' . esc_url($img_pres['url']) . '" alt="Image de présentation">';
         } else {
            echo '<p>Aucune image disponible.</p>';
         }                     
      ?>
   </div>
</div>

         <div class="additional">
            <div>
               <h2 class="custom-title">Où me retrouver ?</h2>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22343.25489566852!2d5.567836471909561!3d45.572311540243284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6354a6efc59d41fd%3A0x39d6bc66817d82ca!2sMultipattes!5e0!3m2!1sen!2sfr!4v1736845489528!5m2!1sen!2sfr" width="414" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>   
            <div>
               <?php echo get_field('map_text'); ?>
                  <a class="button" href="https://multi-pattes.fr/contacts/">
                     Contactez moi !
                  </a>
            </div>
      </section>
<?php get_footer(); ?>
