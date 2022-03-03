<form action="" class="recherche" action=" <?php echo get_home_url('/'); ?>">
            <input type="text" class="recherche__input" placeholder="Recherche" name="s" value="<?php echo get_search_query(); ?>">
            <button class="recherche__bouton">
            <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="rgb(250, 146, 146)"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
            </form>