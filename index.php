<!-- IMPORT DU HEADER -->
<?php get_header(); ?>
<div class="bg-color-container-accueil">
  <div class="container">
    <div class="row">    
      <div class="col-12 col-md-6 col-lg-6 m-auto">
        <h2>Organisation
      des Professionnels
      de l’Economie Numérique
      de Nouvelle-Calédonie
        </h2>
        <a href="#">REJOINDRE LE MOUVEMENT</a>
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <img src="https://open.nc/wp-content/uploads/2019/07/map.svg" alt="calédonie">
      </div>
    </div>
  </div>
<!-- Crée une boucle  -->
<!-- Pour afficher l'ensemble des fichier de la page article -->
    <main class="container">
      <!-- TITRE DU SITE -->
      <h1 class="text-center"><?php bloginfo("name");?></h1>
      <div class="row">
        <div class="col-4">
            <h2 class="text-end">BLOG</h2>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
        </div>
      </div>     
      <!-- BOUCLE : Si il y a des article alors affiche des articles -->
      <div class="row">
          <div class="col-2"></div>
          <?php while(have_posts()) : the_post() ;?>
              <article class="col-12 col-md-12 col-lg-4 text-center border border-dark ml-2">
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
          <div class="col-2"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-12">
            <div class="col-12">
              <h2>Ils sont OUVERTS et vous? </h2>
            </div>
            <div class="col-6">
              <p>Développement informatique, communication numérique, hébergeur et fournisseur d’accès, ingénierie et conseil,
                 système et réseaux, équipements et service après-vente,
                 télécoms et voix sur IP, cyber sécurité, droit informatique…
                  Quel que soit votre domaine d’expertise numérique, vous pouvez rejoindre le mouvement !
            </p>
          </div>
          </div>
        </div>
      </div>
    </main>
  </div>
    <!-- IMPORT DU FOOTER -->
<?php get_footer(); ?>