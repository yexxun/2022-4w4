<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?>  >
<header class="site__header"  style="background-color:<?= get_theme_mod('couleur_background_body'); ?>;" >
    <section class="site__header__titre">
    <?php the_custom_logo(); ?>
    
        <h1 class="header__titre">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo('name'); ?></h1>
        </a>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>   
    

    <section class="site__header__util">
       <?php get_sidebar('entete_1'); ?>
         <?php get_search_form(); ?>
        
    </section>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
