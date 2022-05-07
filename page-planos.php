<?php //TEMPLATE NAME: Planos ?>
<?php get_header(); ?>
<main id="planos" class="page">
   <section class="planos">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="titulo">
                  <h1>Planos</h1>
                  <h2>Conheça nossas <span>Ofertas:</span></h2>
               </div>
            </div>
         </div>
         <div class="row no-gutters">
            <?php
               $args = array(
                  'post_type' => 'planos',
                  'meta_key'	=> 'velocidade',
                  'orderby'	=> 'meta_value_num',
                  'order'		=> 'ASC'
               );
               $planos = new WP_Query($args);
            ?>
            <?php $cont = 1; if($planos->have_posts()): while($planos->have_posts()): $planos->the_post(); ?>
            <article class="plano col-lg-3 col-sm-6 col-12">
               <div class="numero">
                  <h3>Plano</h3>
                  <h2><?php $cont < 10 ? $echo = ("0".$cont) : $echo = $cont; echo $echo; ?></h2>
               </div>
               <hr>
               <div class="velocidade">
                  <h1><?php the_field('velocidade'); ?><span>MB</span></h1>
               </div>
            </article>
            <?php $cont++; endwhile; wp_reset_postdata(); else: endif; ?>
            </div>
            <hr>
            <div class="row mude-plano align-items-center justify-content-center">
               <div class="col-auto">
                  <p>Melhore ainda mais sua <span>AdrenalinaNet:</span></p>
               </div>
               <div class="col-auto">
                  <a href="/contato">
                     Mude seu plano
                  </a>
               </div>
            </div>
      </div>
   </section>
</main>
<?php get_footer(); ?>