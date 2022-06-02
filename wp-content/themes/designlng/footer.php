  <footer class="page-footer" style="background-image:url('<?php bloginfo("template_url");?>/assets/images/footer/darker-bg.png'), url('<?php bloginfo("template_url");?>/assets/images/footer/design.jpg')">
    <div class="wrapper">
      <div class="page-footer__wrapper">
        <div class="page-footer__phone-wrapper">
          <a href="tel:<?php the_field('phone-number');?>" type="tel"><?php the_field('phone');?></a>
        </div>
        <div class="page-footer__social-wrapper">
          <ul class="page-footer__social-list">
            <li class="page-footer__social-item"><a href="<?php the_field('vk-link');?>"><img src="<?php bloginfo('template_url');?>/assets/images/icon/icon-vk.svg" width="27" height="16" alt="Иконка Вконтакте"></a></li>
            <li class="page-footer__social-item"><a href="<?php the_field('facebook-link');?>"><img src="<?php bloginfo('template_url');?>/assets/images/icon/icon-fb.svg" width="16" height="30" alt="Иконка Фейсбук"></a></li>
            <li class="page-footer__social-item"><a href="<?php the_field('instagram-link');?>"><img src="<?php bloginfo('template_url');?>/assets/images/icon/icon-inst.svg" width="26" height="26" alt="Иконка Инстаграм"></a></li>
            <li class="page-footer__social-item"><a href="<?php the_field('telegram-link');?>"><img src="<?php bloginfo('template_url');?>/assets/images/icon/icon-tg.svg" width="28" height="23" alt="Иконка Телеграм"></a></li> 
          </ul> 
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer();?>

</body>

</html>