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
    wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',['popper','jquery'],false,true);//ici en défini un js que l'on peut utilisé 
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',[],false,true);//ici en défini un js que l'on peut utilisé 
    wp_deregister_script('jquerymin');//ici nous enlevons ke jquery que wordpress importe pour par la suite importer celuit que nous voulons utilisé
    wp_register_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js',[],false,true);//ici en défini un js que l'on peut utilisé 
    wp_enqueue_style('bootstrap');// Ici en défini le css que l'on vas utilisé 
    wp_enqueue_script('bootstrap');// Ici en défini le js que l'on vas utilisé ce qui est intéréssant à savoir 
    //ces que nous avons pas besoin de définir les deux autre js car nous les avons déclarés dans le premier 
    //js importé comme bootstrap dépend de popper et jquery . il le charge donc dans le bonne ordre.
}

//ACTION

//Appel de function pour rajouter un menu
add_action( 'init', 'fabrice_enregistre_mon_menu' );
add_action( 'after_setup_theme', 'fabrice_support');
add_action('wp_enqueue_scripts','fabrice_register_asset');
