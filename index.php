<?php get_header(); ?>
<!-- Crée une boucle  -->
<!-- afficher l'ensemble des fichier de la page article -->
    <main>
      <!-- TITRE DU SITE -->
      <h1><?php bloginfo("name");?></h1>
      <!-- Si il y a des article alors affiche des articles -->
      <?php while(have_posts()) : the_post() ;?>
      <article>
        <!-- image mise en avant -->
        <?php the_post_thumbnail("medium"); ?>   
        <!-- TITRE DE LA PAGE --> 
        <h2><?php the_title(); ?></h2>    
        <!-- Contenue complet de la page  -->
        <!-- <?php the_content(); ?> -->
        <?php the_excerpt(); ?><!-- Extrain de la page  -->
      </article> 
      <?php endwhile;?><!-- Une boucle while se fini toujour par un endwhile -->
    </main>
<?php get_footer(); ?>