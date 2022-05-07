<?php //TEMPLATE NAME: Área de Cobertura ?>
<?php get_header(); ?>
<main id="area-cobertura" class="page">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="titulo">
                  <h1><?php the_title(); ?></h1>
               </div>
            </div>
         </div>
         <div class="row">
            <?php 
               $args = array(
                  "post_type" => 'cobertura',
                  "order" => 'asc'
               ); 
               $cobertura = new WP_Query($args);
            ?>
            <?php if($cobertura->have_posts()): while($cobertura->have_posts()): $cobertura->the_post(); ?> 
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
               <article class="area">
                     <i class="fas fa-map-marker-alt"></i>
                     <div class="cidade">
                        <h1><?php the_title();?></h1>
                        <p><?php the_field('endereco'); ?></p>
                     </div>
                     
                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                           Confira no Mapa
                     </button>      

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="<?php the_title();?>-local" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="<?php the_title();?>-local"><?php the_title(); ?></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                   <?php the_field('mapa'); ?>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     
               </article>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
         </div>
      </div>
   </main>
<?php get_footer(); ?>