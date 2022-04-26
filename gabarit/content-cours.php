<?php 
$categories = get_the_category();
?>

                <article class="formation__cours <?php echo $categories[1] -> slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 3, -6);
                        //$nbHeures = substr($titre, -6);
                        $nbHeures = get_field( "nombre_dheures" );
                        $departement = get_field( "departement" );
                        $sigleCours = substr($titre, 0, 7);
                        $desCours = wp_trim_words(get_the_content(),15,"<button class='cours__desc__ouvrir'> La suite </button>");
                        ?>

                        <?php the_post_thumbnail("thumbnail"); ?>
                        <h3 class="cours__titre">
                           <a href=" <?php echo get_permalink(); ?>"> 
                                <?= $titreFiltreCours; ?>
                            </a>
                        
                        </h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $desCours; ?></p>
                        <p class="cours__departement"> <?= $departement; ?></p>
                    </article>
               