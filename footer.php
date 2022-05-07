   <footer>
   <?php 
            $args = array(
               'pagename' => 'contato'
            );
            $contato = new WP_Query($args);
   ?>
   <?php if($contato->have_posts()): $contato->the_post();?>
      <section id="plugin-sociais">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12">
               <div class="fb-page" data-href="<?php the_field('facebook'); ?>" data-tabs="" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php the_field('facebook'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php the_field('facebook'); ?>"></a></blockquote></div>
               </div>
               <div class="col-lg-7 col-md-6 sm-12">
                  <div id="instafeed" class="row no-gutters"></div>
               </div>
            </div>
            
         </div>
      </section>
      <nav class="navbar menu navbar-expand-md">
         
         <div class="container">
         
         
            <div class="navbar-toggler redes-sociais">
                  <a href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
                  <a href="<?php the_field('instagram'); ?>"><i class="fab fa-instagram"></i></a>
                  <a href="<?php the_field('whatsapp'); ?>"><i class="fab fa-whatsapp"></i></a>
            </div>
         
            <span class="navbar-toggler" data-toggle="collapse" data-target="#navbar-footer" aria-controls="navbar-footer" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i></span>
            <?php
               wp_nav_menu( array(
                  'theme_location'    => 'header',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'navbar-footer',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
               ) );
            ?>
         </div>
      </nav>
      <div class="informacoes">
      <a id="chat" target="blank" href="https://wa.me/55<?php echo preg_replace('/[^0-9]/', '', get_field('whatsapp'));?>">
            <figure>
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icone-chat.png" alt="Chat" class="img-fluid">
               <p>Chat</p>
            </figure>
         </a>
         <div class="container">
            <div class="row">
               <div class="col-12">
            
                  <div class="redes-sociais">
                     <a href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
                     <a href="<?php the_field('instagram'); ?>"><i class="fab fa-instagram"></i></a>
                     <a target="blank" href="https://wa.me/55<?php echo preg_replace('/[^0-9]/', '', get_field('whatsapp'));?>"><i class="fab fa-whatsapp"></i></a>
                  </div>
                   
               </div>
            </div>
            <div class="row">
               <div class="col-md-5 col-12">
                  <article class="fale-conosco">
                     <div class="titulo">
                        <h1>Fale Conosco</h1>
                     </div>
                     <div class="endereco">
                        <p><?php the_field('endereco'); ?></p>
                     </div>
                     <p class="telefones">
                        <?php the_field('telefones'); ?>
                     </p>
                     <div class="email">
                        <p><?php the_field('email'); ?></p>
                     </div>
                     <div class="whatsapp">
                        <p><i class="fab fa-whatsapp mr-2"></i><?php the_field('whatsapp'); ?></p>
                     </div>
                  </article>
               
               </div>
               <div class="offset-md-2 col-md-5 col-12">
                  <article class="horario-funcionamento">
                     <div class="titulo">
                        <h1>Horário de Funcionamento:</h1>
                     </div>
                     <div class="horarios">
                        <p>Segunda-Sexta: <?php the_field('segunda-sexta'); ?></p>
                        <p>Sábado: <?php the_field('sabado'); ?></p>
                        <p>Domingo: <?php the_field('domingo-feriados'); ?></p>
                     </div>
                  </article>
               </div>
            </div>
            <div class="row justify-content-end">
                  <div class="col-auto">
                     <a target="_blank" href="https://www.eitxa.com.br"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-eitxa.png" alt="Eitxa! - Agência Digital"></a>
                  </div>
            </div>
         </div>
      </div>
      <?php endif; ?> 
   </footer>

   
   <script src="https://kit.fontawesome.com/b3736c1d99.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="<?php echo get_template_directory_uri();?>/assets/js/instafeed.min.js"></script>
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0&appId=440097576515640&autoLogAppEvents=1"></script>
   <script type="text/javascript">
      var userFeed = new Instafeed({
         get: 'user',
         userId: '12562459679',
         limit: 4,
         resolution: 'standard_resolution',
         accessToken: '12562459679.1677ed0.e8e0ed3368344157b6f36e4b7f87dbec',
         sortBy: 'most-recent',
         template: '<div class="col-lg-3 col-md-6 col-3 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
      });
      userFeed.run();
   </script>
   <style>
      .fb-page{
         margin-bottom: 25px;
   
      }
      .instaimg img{
         width: 100% !important;
         padding: 2px;
      }

   </style>
   <script>
         //992px
         //background: linear-gradient(0deg, #ff8628 40%, #e8e8e8 0);
         //768px
         //background: linear-gradient(0deg, #ff8628 82%, #e8e8e8 0);
      $('#navbarNavAltMarkup').on('show.bs.collapse', function () {
         if($( window ).width() > 768){
            $('.navbar-header').css('background', 'linear-gradient(0deg, #ff8628 40px, #e8e8e8 0px)');
         }else{
             $('.navbar-header').css('background', 'linear-gradient(0deg, #ff8628 82%, #e8e8e8 0)');
         }
      });
      $('#navbarNavAltMarkup').on('hide.bs.collapse', function () {
         $('.navbar-header').css('background','linear-gradient(90deg, #fff 0%, #e8e8e8 28%)');
      });
      $('#navbarNavAltMarkup').on('hidden.bs.collapse', function () {
         $('.navbar-header').css('background', '#fff');
      });
      </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <?php wp_footer(); ?>
</body>
</html>