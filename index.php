<!-- IMPORT DU HEADER -->
<?php get_header(); ?>
<!-- Crée une boucle  -->
<!-- Pour afficher l'ensemble des fichier de la page article -->
    <main>
      <!-- TITRE DU SITE -->
      <h1><?php bloginfo("name");?></h1>
      <!-- BOUCLE : Si il y a des article alors affiche des articles -->
      <?php while(have_posts()) : the_post() ;?>
      <article>
        <a href="<?php the_permalink(); ?>">
          <!-- Rajout d'une image mise en avant  -->
          <?php the_post_thumbnail("medium"); ?>   
          <!-- TITRE DE LA PAGE --> 
          <h2><?php the_title(); ?></h2>
        </a>    
        <!-- Contenue complet de la page  -->
        <!-- <?php the_content(); ?> -->
        <?php the_excerpt(); ?><!-- Extrain de la page  -->
        <a href="<?php the_permalink(); ?>">LIRE</a>
      </article> 
      <?php endwhile;?><!-- Une boucle while se fini toujour par un endwhile -->
    </main>
    <!-- IMPORT DU FOOTER -->
<?php get_footer(); ?>