<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <h1 class='my-3'><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-4">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <figure>
                        <img class="img-top rounded-circle mb-3 img-thumbnail shadow-sm" src="<?php echo get_field('imagen'); ?>" /> 
                    </figure> 
                    </div>
                    <div class="text-center">
                        <p>  <?php echo get_post_meta($post->ID, 'texto', true); ?> </p>
                    </div>
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>