<?php
//FUNCTION

//Function pour rajouter un menu
function fabrice_enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal des DEV NC' ) );// ajouter un menu crée dans wordpress dans le header de notre théme
}
function fabrice_support() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); // Function servant à appeler la mise en avant de l'image dans un article 
}

function fabrice_register_asset(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css','');//ici en défini un css que l'on peut utilisé 
    wp_enqueue_style('bootstrap');// Ici en défini le css que l'on vasz utilisé 
}

//ACTION

//Appel de function pour rajouter un menu
add_action( 'init', 'fabrice_enregistre_mon_menu' );
add_action( 'after_setup_theme', 'fabrice_support');
add_action('wp_enqueue_scripts','fabrice_register_asset');
