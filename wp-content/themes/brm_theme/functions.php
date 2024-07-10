<?php 

function add_contact() {
    $labels = array(
        'name' => 'Contactos',
        'singular_name' => 'Contacto',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo contacto',
        'edit_item' => 'Editar contacto',
        'new_item' => 'Nuevo contacto',
        'view_item' => 'Ver contacto',
        'view_items' => 'Ver contactos',
        'search_items' => 'Buscar contactos',
        'not_found' => 'No se encontraron contactos',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-id',
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'category', 'post_tag'),
    );

    register_post_type('contacto', $args);
}

add_action('init', 'add_contact');



?>