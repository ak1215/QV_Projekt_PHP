<?php
function validate($username, $password, $firstname, $lastname)
{
    define("ALL_MAX_LEN", 20);

    $val_errors = [];

    //Validierung Username
    if ('' === $username) {
        $val_errors[] = 'Username is a mandatory field';
    } elseif (ALL_MAX_LEN < strlen($username)) {
        $val_errors[] = 'Username is to long, it should be, ' .
            ALL_MAX_LEN . ' chars';
    }
    
    //Validierung password
    if ('' === $password) {
        $val_errors[] = 'Password is a mandatory field';
    } elseif (ALL_MAX_LEN < strlen($password)) {
        $val_errors[] = 'Password is to long, it should be, ' .
            ALL_MAX_LEN . ' chars';
    }

    //Validierung firstname
    if ('' === $firstname) {
        $val_errors[] = 'Firstname is a mandatory field';
    } elseif (ALL_MAX_LEN < strlen($firstname)) {
        $val_errors[] = 'Firstname is to long, it should be, ' .
            ALL_MAX_LEN . ' chars';
    }
    
    //Validierung lastname
    if ('' === $lastname) {
        $val_errors[] = 'Lastname is a mandatory field';
    } elseif (ALL_MAX_LEN < strlen($lastname)) {
        $val_errors[] = 'Lastname is to long, it should be, ' .
            ALL_MAX_LEN . ' chars';
    }
}