<?php

function el_contact_capture(){
    $name       = $_POST['el-nombre'];
    $phone      = $_POST['el-telefono'];
    $email      = $_POST['el-mail'];
    $msg        = $_POST['el-mensaje'];

    wp_redirect(home_url());
}