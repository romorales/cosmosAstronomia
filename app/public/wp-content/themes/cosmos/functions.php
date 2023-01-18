<?php 

function init_template() {

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

}

function register_my_menu() {
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );
  }

add_action( 'init', 'register_my_menu' );
//Usar un Hook por que no podemos editar directamente el codigo
// cuando alguien ingresa al sitio WP elije un tema para mostrar y ejecuta estas opciones

add_action('after_setup_theme', 'init_template');

function assets(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css','','5.2.3','all');
    wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat&display=swap','','1.0','all');
    //función get_stylesheet_uri archivo de estilos en la raíz del proyecto
    //array: dependencias que se cargan antes del estilo
    wp_enqueue_style('estilos',get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0','all');    
    
    //true para que se ejecute en el footer
    wp_enqueue_script('bootstraps','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js','','5.2.3',true);

    //para traer mis propios scrips , el get: nos devuelve la direc exacta del template
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);
    
}

// hook cuando comienza a cargarse la página
add_action('wp_enqueue_scripts','assets');

function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id'   => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
        )
        );
}

add_action('widgets_init', 'sidebar');


function productos_type(){
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'manu_name' => 'Productos',
    );

    $args = array(
        'label'  => 'Productos', 
        'description' => 'Productos de Platzi',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-cart',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true

    );    
    register_post_type('producto', $args);
}

add_action('init', 'productos_type');


function staff_type(){
    $labels = array(
        'name' => 'Staff',
        'singular_name' => 'Miembro',
        'menu_name' => 'Staff',
        'add_new_item' => 'Añadir nuevo miembro',
        'add_new' => 'Añadir nuevo miembro',
        'featured_image' => 'Foto',
        'set_featured_image' => 'Cargar foto',

    );

    $args = array(
        'label'  => 'Staff', 
        'description' => 'Staff de Cosmos',
        'labels'       => $labels,
        'public' => false,  
        'show_ui' => true, 
        'supports'   => array('title'),
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-groups',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true

    );    
    register_post_type('miembro', $args);
}

add_action('init', 'staff_type');


function articulos_type(){
    $labels = array(
        'name' => 'Articulos',
        'singular_name' => 'articulo',
        'menu_name' => 'Articulos',
        'add_new_item' => 'Añadir nuevo artículo',
        'add_new' => 'Añadir nuevo artículo',
        'featured_image' => 'Imagen',
        'set_featured_image' => 'Cargar imagen',

    );

    $args = array(
        'label'  => 'Articulos', 
        'description' => 'Articulos de Cosmos',
        'labels'       => $labels,
        'public' => true,  
        'show_ui' => true, 
        'supports'   => array('title', 'post-formats'),
        'show_in_menu' => true,
        'menu_position' => 4,
        'menu_icon'     => 'dashicons-media-document',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true

    );    
    register_post_type('articulo', $args);
}

add_action('init', 'articulos_type');
?>
