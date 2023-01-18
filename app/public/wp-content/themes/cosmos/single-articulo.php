<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <h1 class='my-4 text-center'><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-4">
                    <img class="img-top rounded-circle mb-3 img-thumbnail shadow-sm" src="<?php echo get_field('imagen'); ?>" /> 

                      
                    </div>
                    <!-- <figure>
                        <img class="img-top rounded-circle mb-3 img-thumbnail shadow-sm" src="<?php echo get_field('imagen'); ?>" /> 
                    </figure>  -->
                    <div class="col-6">
                        <p>  <?php echo get_post_meta($post->ID, 'texto', true); ?> </p>
                    </div>
                    </div>
                    
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>