 <footer class="site__footer">
 <div class="site__footer__colonne">
      <section class="footer__article">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque inventore amet quisquam sapiente aperiam harum dolores perferendis repellat ipsa fugit voluptatibus rerum facere hic, quaerat vitae doloremque facilis nam!
      </section>
      <section class="footer__lien">
           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, nam eos, eveniet nemo sint itaque quam consequatur, laboriosam repudiandae minima optio. Beatae sed eius praesentium deleniti distinctio totam vitae quasi!
      </section>
      <section class="footer__adresse">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores numquam esse architecto culpa quos, adipisci deleniti eum a praesentium officiis excepturi ea incidunt eveniet non! Tenetur blanditiis neque ipsum vel.
      </section>
 </div>
 <div class="site__footer__ligne"></div>
 <section class="footer__description">
      <p>4w4-Conception d'interface et développement Web - TIM - Collège de Maisonneuve</p>
 </section>
 <section class="footer__copyright">
      <p>&copy; Tous droit réservé - TIM Collège de Maisonneuve</p>
 </section>
 <section class="footer__auteur">
      <p>Auteur : yeeun Kim</p>
 </section>
 <section class="footer__menu">
 <?php $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
  wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"footer__menu__nav",
                    "menu_class"=>"footer__menu__nav__ul",

                    "link_before"=>$icone)); ?>
                   <div class="footer__recherche">
 </section>
 <section class="footer__recherche">
 <?php  get_search_form(); ?>
 </section>   

 </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>