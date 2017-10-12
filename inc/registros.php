<?php

function amiel_registros(){

  add_menu_page('Amiel Registros', 'Registros', 'administrator', 'amiel_registros', 'amiel_registros_formulario', '', 20);
}
add_action('admin_menu', 'amiel_registros');

function amiel_registros_formulario(){
   ?>
   <div class="wrap">
     <h1>Registros</h1>

   <table class="wp-list-table widefat striped">
     <thead>
       <tr>
         <th class="manage-column">ID</th>
         <th class="manage-column">Nombre</th>
         <th class="manage-column">Correo</th>
         <th class="manage-column">Teléfono</th>
         <th class="manage-column">Asunto</th>
         <th class="manage-column">Mensaje</th>
       </tr>
     </thead>
     <tbody>
       <?php global $wpdb;
        $registros = $wpdb->prefix . 'consultas';
        $registros_ingresados = $wpdb->get_results("SELECT * FROM $registros", ARRAY_A);
        foreach($registros_ingresados as $registros_listados):?>
          <tr>
            <td><?php echo $registros_listados['id'] ?></td>
            <td><?php echo $registros_listados['nombre'] ?></td>
            <td><?php echo $registros_listados['correo'] ?></td>
            <td><?php echo $registros_listados['telefono'] ?></td>
            <td><?php echo $registros_listados['asunto'] ?></td>
            <td><?php echo $registros_listados['mensaje'] ?></td>
          </tr>
        <?php  endforeach; ?>
     </tbody>
   </table>
   </div>
   <?php
}
