<?php get_header(); ?>
<main id="index">
    <section class="painel-informacoes">
        <div class="container">
            <section class="Planos">
                <?php
                     $args = array(
                        'post_type' => 'planos',
                        'meta_key'	=> 'velocidade',
                        'orderby'	=> 'meta_value_num',
                        'order'		=> 'ASC'
                     );
                    $planos = new WP_Query($args);
                ?>
                <div class="titulo">
                    <h1>Planos</h1>
                    <hr>
                    <h2>Conheça nossos <a href="/planos">planos</a></h2>
                </div>
                <ul class="lista-planos">
                <?php $cont = 1; if($planos->have_posts()): while($planos->have_posts()): $planos->the_post(); ?>
                    <li><?php $cont < 10 ? $echo = ("0".$cont) : $echo = $cont; echo $echo; ?> - <span><?php echo preg_replace("/[^0-9]/", "", get_the_title());  ?></span>MB</li>
                <?php $cont++; endwhile; wp_reset_postdata(); else: endif; ?>
                </ul>
            </section>
            <a target="blank" href="http://179.97.95.97/Login.php?Erro=TempoLogado" class="AreaCli">
                <div class="titulo">
                    <h1><i class="fas fa-user"></i>Área do Cliente</h1>
                    <hr>
                </div>
                <div class="goto" target="blank" href="http://179.97.95.97/Login.php?Erro=TempoLogado"><i class="fas fa-arrow-right"></i></div>
            </a>
            <section class="AreaCor">
                <div class="titulo">
                    <h1>Área de Cobertura</h1>
                    <hr>
                </div>
                <?php
                 $args = array(
                    "post_type" => 'cobertura',
                    "order" => 'asc'
                 ); 
                 $cobertura = new WP_Query($args);
                ?>
                
                <ul class="lista">
                <?php if($cobertura->have_posts()): while($cobertura->have_posts()): $cobertura->the_post(); ?> 
                    <li><?php the_title();?></li>
                <?php endwhile; wp_reset_postdata(); endif; ?>
                </ul>   
            </section>
        </div>
    </section>
    <section class="sobre">
        <?php
            $args = array(
                "pagename" => 'o-provedor'   
            );
            $provedor = new WP_Query($args);
            if($provedor->have_posts()): $provedor->the_post(); 
        ?>
        <div class="container">
            <div class="titulo">
                <h1>A Adrenalina Net</h1>
            </div>
            <div class="conteudo">
                <?php the_content();?>
            </div>
        </div>
        <?php wp_reset_postdata(); endif; ?>
    </section>
    <section id="velocimetro">
        <div class="container">
        <div id="background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/background-velocimetro.png" class="img-fluid" alt="Velocimetro">
            <div class="conteudo">
                <h1>Velocímetro</h1>
                <h2>Teste a sua velocidade de conexão.</h2>
                <a target="blank" href="https://www.speedtest.net/pt" class="btn btn-lg">Iniciar Teste</a>
            </div>
        </div>
        
        </div>
    </section>
</main>
<?php get_footer(); ?>