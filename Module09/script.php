<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // get the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Validation checks

    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        echo "You must fill all information..";
    } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo "Enter a valid email..";
    } else {
        echo "Congratulation!!! Your registration is successfully Done! ".$name.".";
    }
}