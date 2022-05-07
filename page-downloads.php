<?php // TEMPLATE NAME: Downloads ?>
<?php get_header(); ?>
<main id="downloads" class="page">
    <section class="downloads">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titulo">
                        <h1>Downloads</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="grupobotoes">
            <div class="row mb-3">
                <div class="col-md-3 col-6 botao">
                    <button class="btn btn-download" type="button" data-toggle="collapse" data-target="#Programas" aria-expanded="false"><i class="fas fa-download mr-2"></i>Programas</button>
                </div>
                <div class="col-md-3 col-6 botao">
                    <button class="btn btn-download" type="button" data-toggle="collapse" data-target="#Contratos" aria-expanded="false"><i class="fas fa-download mr-2"></i>Contratos</button>
                </div>
                <div class="col-md-3 col-6 botao">
                    <button class="btn btn-download" type="button" data-toggle="collapse" data-target="#Drives" aria-expanded="false"><i class="fas fa-download mr-2"></i>Drives</button>
                </div>
                <div class="col-md-3 col-6 botao">
                    <button class="btn btn-download" type="button" data-toggle="collapse" data-target="#App" aria-expanded="false"><i class="fas fa-download mr-2"></i>App</button>
                </div>
            </div>
            <?php
                
                $taxonomies = get_object_taxonomies( array( 'post_type' => 'downloads' ) );
                foreach( $taxonomies as $taxonomy ) :
                    $i = 0;
                    $terms = get_terms( $taxonomy );
                    foreach( $terms as $term ) : ?>
                        <?php
                        $args = array(
                                'post_type' => 'downloads',
                                'posts_per_page' => -1,  //show all posts
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => $taxonomy,
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                    )
                                ) 
                        );
                        $posts = new WP_Query($args);
                        ?>
                        <div class="collapse row <?php if($i==0): echo "show"; endif;?>" id="<?php echo $term->name; ?>" data-parent="#grupobotoes">
                        <?php if($posts->have_posts()): while( $posts->have_posts()):$posts->the_post(); ?>
                            <div class="col-md-6 col-12">
                                <div class="row item mx-0">
                                    <figure class="col-lg-4 col-md-5 col-4 d-flex align-items-center justify-content-center">
                                        <img src="<?php the_field('imagem_do_icone'); ?>" class="img-fluid" alt="">
                                    </figure>
                                    <div class="col-lg-8 col-md-7 col-8">
                                        <div class="content">
                                            <h1><?php the_title(); ?></h1>
                                            <p><?php the_field('content'); ?></p>
                                            <?php 

                                            $file = get_field('arquivo');

                                            if( $file ): ?>
                                                <a href="<?php echo $file['url']; ?>"download><i class="fas fa-download"></i>Baixar</a>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    <?php  $i++; endforeach;
                endforeach; 
            ?>

        
        </div>
            </div>  
            
        
        </div>
    </section>
</main>
<?php get_footer(); ?>