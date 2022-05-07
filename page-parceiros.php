<?php //TEMPLATE NAME: Parceiros ?>

<?php get_header(); ?>
<main id="parceiros" class="page">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="titulo">
               <h1>Parceiros</h1>
            </div>
         </div>
      </div>
      <?php
         $args = array(
            'post_type' => 'parceiros',
            'order' => 'desc'
         );
         $parceiros = new WP_Query($args);
      ?>
      <div class="row align-items-center">
         <?php if($parceiros->have_posts()): while($parceiros->have_posts()): $parceiros->the_post(); ?>
         <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
            <figure class="parceiro">
               <img src="<?php the_field('parceiro'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
            </figure>
         </div>
      <?php endwhile; wp_reset_postdata(); else: echo "Não há o que mostrar aqui."; endif; ?>         
      </div>
   </div>
</main>
<?php get_footer(); ?>