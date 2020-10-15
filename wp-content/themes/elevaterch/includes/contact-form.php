<?php

function el_contact_capture(){
    $name       = $_POST['el-nombre'];
    $phone      = $_POST['el-telefono'];
    $email      = $_POST['el-mail'];
    $msg        = $_POST['el-mensaje'];

    $to = 'info@elevaterchingenieria.com';
    $subject = 'Contacto - WEB SITE';
    $body = 'Nombre: ' . $name . '<br>Teléfono: ' . $phone . '<br>Email: ' . $email . '<br>Mensaje:<br>' . $msg;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $send = wp_mail( $to, $subject, $body, $headers);
    
    if( $send ){ 
        wp_redirect(home_url());
    }

}