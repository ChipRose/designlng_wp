<?php
/*
Template Name: post
Template Post Type: post
*/
?>

<?php get_header();?>

  <main class="page-main">
    <section class="main-area">
      <div class="wrapper">
        <div class="wyziwyg-wrapper">
        <?php the_content(); ?>
        </div>
      </div>
    </section>
    <section class="feedback" id="feedback">
      <div class="wrapper">
        <div class="reviews-form feedback__form-block">
          <h2 class="feedback__title">Оставить отзыв</h2>
          <div class="feedback-form">
            <?php echo do_shortcode('[contact-form-7 id="31" title="Контактная форма"]'); ?>
          </div>
        </div>
        <div class="reviews feedback__form-block">
          <div class="review feedback__review">
            <div class="review__image-wrapper">
              <picture><img class="review__image" src="<?php bloginfo("template_url");?>/assets/images/avatar/ivan.png" srcset="<?php bloginfo("template_url");?>/assets/images/avatar/ivan@2x.png 2x" width="50" height="50" alt="Аватар Ивана Грачева" /></picture>
            </div>
            <p class="review__name">Иван Грачев</p>
            <p class="review__text">Очень самобытный и необычный проект.</p>
          </div>
          <div class="review feedback__review">
            <div class="review__image-wrapper">
              <picture><img class="review__image" src="<?php bloginfo("template_url");?>/assets/images/avatar/maria.png" srcset="<?php bloginfo("template_url");?>/assets/images/avatar/maria@2x.png 2x" width="50" height="50" alt="Аватар Марии Рачинской" /></picture>
            </div>
            <p class="review__name">Мария Рачинская</p>
            <p class="review__text">Мне особенно понравилось решение лестничных клеток. Кружки вообще очень стильные!
            </p>
          </div>
          <div class="review feedback__review">
            <div class="review__image-wrapper">
              <picture><img class="review__image" src="<?php bloginfo("template_url");?>/assets/images/avatar/svetlana.jpg" srcset="<?php bloginfo("template_url");?>/assets/images/avatar/svetlana@2x.jpg 2x" width="50" height="50" alt="Аватар Светланы" /></picture>
            </div>
            <p class="review__name">Светлана</p>
            <p class="review__text">Очень нравится, что в городе развиваются такие проекты. Надеюсь, такие проекты скоро
              будут не только в частных домах, но и в кафе, музеях, театрах. Я бы сходила!</p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer();?>
