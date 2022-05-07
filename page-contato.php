<?php //TEMPLATE NAME: Contato ?>
<?php if(have_posts()): the_post(); ?>
<?php get_header(); ?>
<main id="contato" class="page">
   <section class="contato">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="titulo">
                  <h1><?php the_title(); ?></h1>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-7 col-12">
               <?php the_field('formulario'); ?>  
            </div>
            <div class="offset-lg-1 col-lg-4 col-md-5 col-12">
               <div class="mapa">
                  <?php the_field('sede'); ?>
               </div>
               <a target="blank" href="https://wa.me/55<?php echo preg_replace('/[^0-9]/', '', get_field('whatsapp'));?>" class="telefone d-flex align-items-center justify-content-center">
                  <i class="fab fa-whatsapp mr-4"></i>
                  <div class="box">
                     <h2>Suporte</h2>
                     <p><?php the_field('whatsapp'); ?></p>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </section>
</main>
<?php get_footer(); ?>
<?php endif; ?>