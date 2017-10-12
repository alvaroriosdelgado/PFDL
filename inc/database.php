<?php
// inicializa creacion de base de datos del formulario de contacto
function formulario_database(){
  global $wpdb;
  global $formulario_dbversion;
  $formulario_dbversion = '1.0';

  $tabla = $wpdb->prefix . 'consultas';
  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $tabla (
    id mediumint(50) NOT NULL AUTO_INCREMENT,
    nombre varchar(50) NOT NULL,
    correo varchar(50) DEFAULT '' NOT NULL,
    telefono varchar(20) NOT NULL,
    asunto varchar(100) NOT NULL,
    mensaje longtext NOT NULL,
    PRIMARY KEY (id)
  ) $charset_collate; ";

  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
  dbDelta($sql);
  add_option('formulario_dbversion', $formulario_dbversion);

//  actualiza tablas de la base de datos cuando creo nuevos campos en el formulario
  $version_actual = get_option('formulario_dbversion');

  if($formulario_dbversion != $version_actual){
    $tabla = $wpdb->prefix . 'consultas';

    $sql = "CREATE TABLE $tabla (
      id mediumint(50) NOT NULL AUTO_INCREMENT,
      nombre varchar(50) NOT NULL,
      correo varchar(50) DEFAULT '' NOT NULL,
      telefono varchar(20) NOT NULL,
      asunto varchar(100) NOT NULL,
      mensaje longtext NOT NULL,
      PRIMARY KEY (id)
    ) $charset_collate; ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    update_option('formulario_dbversion', $formulario_dbversion);
  }

}
add_action('after_setup_theme','formulario_database');


// controla version de la base de datos

function formulario_dbrevisar(){
  global $formulario_dbversion;
  if(get_site_option('formulario_dbversion') !=  $formulario_dbversion){
    formulario_database();
  }
}
add_action('plugins_loaded', 'formulario_dbrevisar');

 ?>
