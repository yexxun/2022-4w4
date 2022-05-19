<?php get_header() ?>
<main class="site__main">
    <section class="animation">
        <div class="animation__bloc">S</div>
        <div class="animation__bloc">A</div>
        <div class="animation__bloc">L</div>
        <div class="animation__bloc">U</div>
        <div class="animation__bloc">T</div>
    </section>
    <h2>Activités en TIM</h2>
    <?php 
    wp_nav_menu(array("menu"=>"accueil",
                        "container"=>"nav"));
    ?>

<h2>Événements importants pour l'année</h2>
    <?php 
    wp_nav_menu(array("menu"=>"evenement",
                        "container"=>"nav"));
    ?>

<h2>Les ateliers à venir</h2>
    <?php 
    wp_nav_menu(array("menu"=>"atelier",
                        "container"=>"nav"));
    ?>
    

   <?php if (have_posts()):  the_post(); ?>
   <h1><?php the_title() ?></h1>
   
        <?php the_content() ?>  
            
    <?php endif ?>  
</main>
<?php get_footer() ?>