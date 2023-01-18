<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
                <div class="container-fluid">
                <a class="navbar-brand" href="/"> 
                    <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logos/logo-transparente.png" alt="logo" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0', 
                            'container_class' => 'navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll',
                        )
                    ); 
                    ?>
                    <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar en Cosmos" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
                    </div>
                </div>
            </nav>
        </div>
                </header>
</html>