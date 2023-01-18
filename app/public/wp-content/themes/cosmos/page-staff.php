<?php get_header(); ?>

<div class="my-5 mx-3">
        <h2 class='text-center'>Staff</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'miembro',
            'post_per_page' => -1,
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $staff = new WP_Query($args);

        if($staff->have_posts()){
            while($staff->have_posts()){
                $staff->the_post();
                ?>
                <div class="card text-white bg-dark rounded shadow-sm py-5 px-4 m-3" style="width: 18rem; ">
                    <figure>
                        <img class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" src="<?php echo get_field('foto'); ?>" /> 
                    </figure> 
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php the_title();?></h5>
                        <span class="small text-uppercase text-muted"> <?php echo get_post_meta($post->ID, 'rol', true); ?></span>
                        <p class="card-text">  <?php echo get_post_meta($post->ID, 'descripcion', true); ?> </p>
                    </div>
                </div>
           <?php }
        }

        ?>
      </div>
    </div>
    
<?php get_footer(); ?>