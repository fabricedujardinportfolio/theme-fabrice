<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo("name"); ?> -
        <?php bloginfo("description"); ?>
    </title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
</head>
<body>
<!-- Cette syntaxe force wordpress d'afficher que le menu qui à était cocher sur emplacement "Menu principal des DEV NC" -->
<!-- Elle ne sera donc pas utiliser sur le menu footer si en voudrais l'utilisé -->
<!-- <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?> -->
<!-- MENU -->
    <?php wp_nav_menu(); ?>