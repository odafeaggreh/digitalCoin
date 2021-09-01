<?php
require 'healper.php';


$error = array();

$email = validate_input_email($_POST['email']);

if (empty($email)){
    $error[] = "You forgot to enter your email";
}


$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

require 'mysqli_connection.php';

if (empty($error)) {
    
    // sql query
    $query = "SELECT userID, firstName, lastName, password, email, totalbalance, totaldeposit, profit, status, plan, roi FROM users WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // bind params
    mysqli_stmt_bind_param($q, 's', $email);
    // execute query
    mysqli_stmt_execute($q);
    

    // result 
    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (!empty($row)) {
        $id = $row['userID'];

        // verify password
        if (password_verify($password, $row['password'])) {
            header("location: account/dashboard.php?id=$id");
            exit();
        }else{
            print "You are not a member, please register";
        }
    }
}else{
    echo "please fill out email and password to login";
}