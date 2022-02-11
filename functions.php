<?php 

function cidw_4w4_enqueue(){
    wp_enqueue_style('style_css', get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* ------------------------------------------------------------------Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );
/*--------------------------------------------------------------------Filtré les choix du menu principal */
function cid2_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
        //print_r($value);
        $value -> title = substr($value -> title,0,7);
        //$value ->title = wp_trim_words($value -> title,3,"...");
        //echo $value -> title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_meu_objects","cid2_4w4_filtre_choix_menu")
?>