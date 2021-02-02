<?php get_header(); ?>
<!-- Crée une boucle  -->
<!-- afficher l'ensemble des fichier de la page article -->
<main>
    <!-- Si il y a des article alors affiche des articles -->
    <?php while(have_posts()) : the_post() ;?> 
    <!-- TITRE DE LA PAGE --> 
    <h2><?php the_title(); ?></h2>    
    <!-- Contenue complet de la page  -->
    <?php the_content(); ?>
    <!-- Extrain de la page  --> 
    <!-- <?php the_excerpt(); ?> -->
    <?php endwhile;?><!-- Une boucle while se fini toujour par un endwhile -->
</main>
<?php get_footer(); ?>