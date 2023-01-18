<?php get_header(); ?>

<div class="my-5 mx-3">
        <h2 class='text-center'>Últimos artículos</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'articulo',
            'post_per_page' => -1,
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $articulos = new WP_Query($args);
    
        if($articulos->have_posts()){
            while($articulos->have_posts()){
                $articulos->the_post();
                ?>
                <div class="card text-white bg-dark rounded shadow-sm py-2 px-4 m-3" style="max-width: 540px; ">
                <div class="row g-0">
                    <div class="col-md-4">
                            <img class="img-fluid rounded-start shadow-sm" src="<?php echo get_field('imagen'); ?>" /> 
                        </div>
                    <div class="col-md-8">
                    <div class="card-body">
                    <a href="<?php the_permalink(); ?>">
                        <h5 class="card-title"><?php the_title();?></h5></a>
                        <p class="card-text"><small class="text-muted"><?php the_date();?></small></p>
                        <p class="card-text"> <?php echo get_post_meta($post->ID, 'texto', true); ?> </p>
                        </div>
                        </div>
                </div>
                </div>
           <?php }
        }

        ?>
      </div>
    </div>
    
<?php get_footer(); ?>