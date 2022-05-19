<?php /**
 *  Template Name: Atelier
 * 
 * @package WordPress
 * @subpackage cidw_4w4
 */  ?>
<?php get_header() ?>
<main class="site__main">
    <article class="atelier">
    <h1>---- Template atelier ----</h1>
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <section class="atelier__resume">
            
        </section>
        <p class="atelier__endroit">
           <?php the_field('endroit'); ?> 
        </p>
        <p class="atelier__date">
           <?php the_field('date'); ?> 
        </p>
        <p class="atelier__heure">
           <?php the_field('heure'); ?> 
        </p>

        <p><?php the_field('organisateur'); ?></p>
         <?php 
         $image = get_field('image');
         if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>

     </article>           
    <?php endif ?> 
</main>
<?php get_footer() ?>