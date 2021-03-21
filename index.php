<?php
/*
 Plugin name: delete-objects-when-user-is-logged
 plugin uri: www.localhost.com
 Description: Short Code para eliminar elementos html cuando el usuario esta logeado
 Author: Luis Castillo
 Version: 0.1
 Author URI:
 */

add_shortcode("delete_objects_when_user_is_logged","delete_objects_when_user_is_logged");

function delete_objects_when_user_is_logged(){

    if(!(get_current_user_id() > 0 )){
        return "<script>jQuery('.si_inicio_sesion').remove()</script>";
    }else{
        return "<script>jQuery('.no_inicio_sesion').remove()</script>";

    }

}

