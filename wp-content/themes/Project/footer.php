<footer class="footerSec">


   <div class="row  wow slideInUp " data-wow-duration="1s" data-wow-delay=".5s">">


      <div class="col span-1-of-3 footerBox">

          <i class="ion-email"></i>
          <p><?php the_field('my_email', 21);?></p>

      </div>




      <div class="col span-1-of-3 footerBox">

          <i class="ion-android-call"></i>
          <p><?php the_field('my_tel', 21); ?></p>

      </div>


      <div class="col span-1-of-3 footerBox">

          <i class="ion-social-facebook-outline"></i>
          <i class="ion-social-linkedin-outline"></i>
          <p><?php the_field('social_media', 21); ?></p>

      </div>


   </div>


<p class="footerinfo"><?php the_field('copyright_info', 21); ?></p>




</footer>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/unslider.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
