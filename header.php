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
</head>
<body>
    <?php wp_nav_menu(); ?>