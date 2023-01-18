<?php get_header(); ?>

<main class='container text-center'>
    <div class='py-3'>
        <img src="<?php echo get_template_directory_uri()?>/assets/img/404-img.png" alt="imagen" width="300px" height="300px" class="img-fluid">
                    <h2>404 PÁGINA NO ENCONTRADA</h2>
                    <h4>Haga <a href="<?php echo home_url(); ?>">click aquí </a> para volver al inicio.</h4>
    </div>  
</main>

<?php get_footer(); ?>