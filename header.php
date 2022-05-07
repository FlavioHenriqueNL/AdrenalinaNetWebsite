<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php bloginfo('Name'); ?> | <?php echo is_home(); ?>  </title>

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <header>
      <nav class="navbar navbar-header menu navbar-expand-lg">
         <div class="container">
            <a href="/" class="navbar-brand">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="Adrenalina Net">
            </a>
            <span class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i></span>
            <?php
               wp_nav_menu( array(
                  'theme_location'    => 'header',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'navbarNavAltMarkup',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
               ) );
            ?>
            <div class="contato">
               <h1>Contato:</h1>
               <p>0800 095 0364</p>
            </div>
            
         </div>
      </nav>
     
      <?php 
         $args = array(
            'post_type' => 'slider'
         );
         $slider = new WP_Query($args);
      ?>
      
      
      <div id="adrenalina" class="carousel slide" data-ride="carousel">
        
         <div class="carousel-inner">
            <?php if($slider->have_posts()): $cont = 0; while($slider->have_posts()): $slider->the_post(); ?>
               <div class="carousel-item <?php if($cont == 0): echo "active"; endif; $cont++?>">
                  <img src="<?php the_field('slider'); ?>" class="d-block w-100" alt="<?php the_title(); ?>">
               </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
         </div>
      </div>
     
   </header>