<?php /* Template Name: Home */ ?>

<?php 
    if (isset($_POST['submit_contacto'])) {
        $nombre = sanitize_text_field($_POST['nombre']);
        $apellido = sanitize_text_field($_POST['apellido']);
        $celular = sanitize_text_field($_POST['celular']);
        $email = sanitize_text_field($_POST['email']);
    
        $registro = array(
            'post_title'   => $nombre . ' ' . $apellido,
            'post_type'    => 'contacto',
            'post_status'  => 'publish',
        );
    
        $post_id = wp_insert_post($registro);

        update_post_meta($post_id, 'Nombre', $nombre);
        update_post_meta($post_id, 'Apellido', $apellido);
        update_post_meta($post_id, 'Celular', $celular);
        update_post_meta($post_id, 'Email', $email);
    
        if ($post_id) {
            echo "Contacto agregado - ID: " . $post_id;
        } else {
            echo "Error al agregar el registro";
        }
    }
    get_header();
?>
<form method="post" action="">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
    <input type="number" name="celular" id="celular" placeholder="Celular" required>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="submit" name="submit_contacto" value="Agregar Contacto">
</form>
<div>
    <h3><a href="<?php echo home_url(); ?>/contacto">Ir a ver contactos</a></h3>
</div>

<?php get_footer(); ?>