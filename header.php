<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo("name"); ?> -
        <?php bloginfo("description"); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head()?>
</head>
<body>
<!-- Cette syntaxe force wordpress d'afficher que le menu qui à était cocher sur emplacement "Menu principal des DEV NC" -->
<!-- Elle ne sera donc pas utiliser sur le menu footer si en voudrais l'utilisé -->
<!-- <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?> -->
<!-- MENU -->
<nav class="container-fluid">
    <div class="row bg-secondary">
        <div class="col-12 col-md-6 col-md-6">    
            <img src="http://localhost/wordpress/wp-content/uploads/2021/02/logo_open_nc.png" alt="Logo du site" width="auto" height="80px"/>
        </div>
        <div class="col-12 col-md-6 col-md-6 m-auto">
            <?php wp_nav_menu(); ?>
        </div>
    </div>
</nav>    