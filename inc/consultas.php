<?php

function formulario_dbguardar(){
  global $wpdb;

  if(isset($_POST['enviar'])  && $_POST['oculto'] == "1"):

    $nombre = sanitize_text_field( $_POST['nombre'] );
    $correo = sanitize_text_field( $_POST['correo'] );
    $telefono = sanitize_text_field( $_POST['telefono'] );
    $asunto = sanitize_text_field( $_POST['asunto'] );
    $mensaje = sanitize_text_field( $_POST['mensaje'] );

    $tabla = $wpdb->prefix . 'consultas';

    $datos = array(
      'nombre' => $nombre,
      'correo' => $correo,
      'telefono' => $telefono,
      'asunto' => $asunto,
      'mensaje' => $mensaje,
    );

    $formato = array(
      '%s',
      '%s',
      '%s',
      '%s',
      '%s'
    );

      $wpdb->insert($tabla, $datos, $formato);

      $url = get_page_by_title('Gracias por contactarnos');
      wp_redirect( get_permalink( $url->ID ));
      exit();

  endif;
}
add_action('init', 'formulario_dbguardar');

?>
