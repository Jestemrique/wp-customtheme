<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
<header >

<section class="hero">
  <div class="hero-body">
    <p class="title">
    <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    </p>
    <p class="subtitle">
    <?php bloginfo( 'description' ); ?>
    </p>
  </div>
</section>

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">


<?php
  // Select our menu
  $menu = my_menu_builder('main-menu');
  //echo '<pre>'; print_r($menu); echo '</pre>';
  foreach ($menu as $item) :
    //Set class names if the menu item is active
    $menu_item_active_class = get_the_ID() == $item['ID'] ? 'button' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    $sub_menu_item_active_class = get_the_ID() == $item['ID'] ? 'bg-gray-100 text-gray-900' : 'text-gray-700';

    //Menu item has children
    if (isset($item['children'])) : ?>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href='<?= $item['url'] ?>'><?= $item['title']; ?></a>

        <div class="navbar-dropdown">
          <?php foreach ($item['children'] as $child) : ?>
            <a class="navbar-item" href='<?= $child['url'] ?>'><?= $child['title'] ?></a>
          <?php endforeach; ?>
        </div>
    </div>
  
    <?php else: ?>
      <a class="navbar-item" href='<?= $item['url'] ?>'><?= $item['title']; ?></a>
    <?php endif; ?>

  <?php endforeach;?>

    </div>
  </div>
</nav>
</header>

