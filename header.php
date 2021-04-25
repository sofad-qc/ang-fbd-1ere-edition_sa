<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="sa-toolbar">
    <header>
      <!-- Burger icon for top menu (< medium screen) -->
      <div class="title-bar" data-sa-toggle="sa-navigation-drawer-content" data-hide-for="large">
          <button class="" type="button" data-toggle><span></span></button>
      </div>
      <div class="brand">
        <i class="brand__logo"></i> <?php echo get_bloginfo("title");?></div>
      <nav class="nav">
        <ul>
          <!--<li><a href="<?php echo get_home_url(); ?>"class="home"><span>Accueil</span></a></li>-->
          <li><a href="<?php echo home_url("page/boite-a-outils.html"); ?>" class="bao" target="_blank">Boîte à outils</a></li>-->
          <li><a class="sofadauteur-btn-return">Retour au PORTAIL</a></li>
        </ul>
      </nav>
    </header>
  </div>
