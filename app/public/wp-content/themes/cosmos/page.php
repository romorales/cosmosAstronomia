<?php get_header(); ?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?></h1>

            <?php the_content(); ?>

         <?php }
    }?>
</main>
<!-- <?php if (is_page('staff') ) { include (TEMPLATEPATH .'/pagina-staff.php'); } ?> -->

<?php get_footer(); ?>