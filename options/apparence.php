<?php  
add_action('customize_register', function(WP_Customize_Manager $manager){
    $manager->add_section('section_modifier_background_body',
                        ["title"=>"Couleur du background"]);

/* Première propriété à modifier */
$manager->add_setting('couleur_background_body',[
                    "default"=>"#fff",
                    "sanitize_callback"=>"sanitize_hex_color"
                        ]);
/* Deuxième propriété à modifier */
$manager->add_setting('couleur_background_footer',[
                     "default"=>"#fff",
                    "sanitize_callback"=>"sanitize_hex_color"
                        ]);
/*
$manager->add_control('couleur_background_body',[
                            "section"=>"section_modifier_background_body",
                            "setting"=>"Couleur background du body",
                             "label"=>"Couleur background du body"
                            ]);                    
                       
*/  
/* Première propriété à modifier */
$manager->add_control(new WP_Customize_Color_Control($manager,"couleur_background_body",[
                        "section"=>"section_modifier_background_body",
                        "label"=>"Couleur background de l'entête"
                         ]));

/* Deuxième propriété à modifier */
$manager->add_control(new WP_Customize_Color_Control($manager,"couleur_background_footer",[
                      "section"=>"section_modifier_background_body",
                      "label"=>"Couleur background du footer"
                       ]));
    
    
});

?>