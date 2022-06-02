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
          <a href="<?php bloginfo('url');?>">
            <?php the_custom_logo();?>
          </a>
        </div>
        <div class="page-header__menu-wrapper">
          <nav class="menu-primary-container">
          <?php wp_nav_menu(array(
            'theme_location'=> 'main_menu',
            'container' => null,
            'menu_class' => 'menu',
            'menu_id' => 'menu',
          ));?>
          </nav>
        </div>
      </div>
    </div>
  </header>
