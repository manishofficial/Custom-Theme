<?php

add_action( 'user_register', 'myplugin_registration_save', 10, 1 );

function myplugin_registration_save( $user_id ) {

    if ( isset( $_POST['first_name'] ) ){
        update_user_meta($user_id, 'first_name', $_POST['first_name']);
    }

    if ( isset( $_POST['last_name'] ) ){
        update_user_meta($user_id, 'last_name', $_POST['last_name']);
    }
    $password = $_POST['pass1'];
    wp_set_password( $password, $user_id );
}