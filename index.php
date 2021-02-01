<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name");?> - <?php bloginfo("description");?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
</head>
<body>
    <main>
        <h1><?php bloginfo("name");?></h1>
<!-- Crée une boucle  -->
<!-- afficher l'ensemble des fichier de la page article -->
        <?php while(have_posts()) : the_post() ;?><!-- Si il y a des article alors affiche des articles -->
            <article>
                <?php the_post_thumbnail("medium"); ?><!-- image mise en avant -->
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile;?><!-- Une boucle while se fini toujour par un endwhile -->
    </main>
</body>
</html>