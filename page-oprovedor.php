<?php //TEMPLATE NAME: Sobre ?>
<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<main id="sobre" class="page">
    <section class="sobre">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <h1>O provedor</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="thumbnail col-md-5 col-12 float-left mr-3 mb-5 p-0">
                <?php $img = wp_get_attachment_image_src(get_field('_thumbnail_id'), 'large', false ); ?>
                    <img src="<?php echo $img[0]; ?>" class="img-fluid" alt="<?php the_title(); ?>">
                </div>  
                <?php the_content();?>
            </div>
            <div class="col-12">
                <?php the_field('galeria');?>
            </div>
        </div>
        </div>
    </section>
</main>
<?php endif; ?>
<?php get_footer();?>
