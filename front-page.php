<?php get_header() ?>
<main class="site__main">
    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
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
    

   <?php if (have_posts()): while(have_posts()) : the_post(); ?>
   <?php the_title() ?>
        <?php the_content() ?>  
        <?php endwhile; ?>      
    <?php endif ?>  
</main>
<?php get_footer() ?>