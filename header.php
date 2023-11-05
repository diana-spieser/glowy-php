<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.3.0/wow.min.js"></script>

<link rel="stylesheet" href="css/animate.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


<body>

  <header>
    <section class="header header-mobile">
      <div>
        <img class="header__heading" src="<?php echo get_template_directory_uri(); ?>/assets/images/site_logo.png"
          alt="Logo de Diana Spieser" />
        <img class="header__btn-menu" src="<?php echo get_template_directory_uri(); ?>/assets/images/closemenu_icon.png"
          alt="Icône d'ouverture de menu" />
      </div>
      <nav class="header__nav header-mobile__nav">
        <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu(array('theme_location' => 'primary_menu',));
            } ?>
        <ul>
          <li class="btn-modale">Contact</li>
        </ul>
      </nav>
    </section>

    <section class="header header-desktop">
      <div>
        <img class="header__heading" src="<?php echo get_template_directory_uri(); ?>/assets/images/site_logo.png"
          alt="Logo de Diana Spieser" />
        <img class="header__btn-menu" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_icon.png"
          alt="Icône d'ouverture de menu" />
      </div>
      <nav class="header__nav header-desktop__nav">
        <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu(array('theme_location' => 'primary_menu',));
            } ?>
        <ul>
          <li class="btn-modale">Contact</li>
        </ul>
      </nav>
    </section>
  </header>

  <main>