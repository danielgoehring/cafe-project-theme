<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="site-wrapper">
  <header class="site-header">
  <div class="header-container">
  <h1 class="site-title">
  <a href="<?php echo esc_url(home_url('/')); ?>">
    <?php bloginfo('name'); ?>
  </a>
</h1>


    <button class="menu-toggle" aria-label="Toggle menu">
      ☰
    </button>
    <nav class="site-nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'main_menu',
        'menu_class' => 'nav-links',
      ]);
      ?>
    </nav>
</div>

    
  
</header>

