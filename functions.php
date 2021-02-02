<?php
add_theme_support('post-thumbnails'); // Function servant à appeler la mise en avant de l'image dans un article 
//Function pour rajouter un menu
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal des DEV NC' ) );
}
//Appel de function pour rajouter un menu
add_action( 'init', 'enregistre_mon_menu' );