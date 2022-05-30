<!doctype html>
<html <?php language_attributes();?>>

<head>
  <meta charset=<?php bloginfo('charset');?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <?php wp_head();?>
</head>

<body>
  <header class="page-header">
    <div class="wrapper">
      <div class="page-header__wrapper">
        <div class="page-header__logo-wrapper">
        <?php the_custom_logo();?>
        </div>
        <div class="page-header__menu-wrapper">
          <nav class="menu-primary-container">
            <ul class="menu">
              <li class="menu-item menu-item-has-children"><a href="#">Наши проекты</a>
                <ul class="sub-menu">
                  <li class="menu-item"><a href="#">Tomazzi Hall</a></li>
                  <li class="menu-item"><a href="#">Lounge Hall</a></li>
                  <li class="menu-item"><a href="#">Astra Hall</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="#">Контакты</a></li>
              <li class="menu-item menu-item--styled"><a href="#">Оставить отзыв</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
