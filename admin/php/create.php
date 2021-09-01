<?php

if (isset($_POST['create'])) {
    include '../myconn.php';
    function validate ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $user_data = 'name='.$firstName. '&email='.$email;

    if (empty($firstName)) {
        header("location: ../index.php?error=Firstname is required");
    }else if (empty($lastName)) {
        header("location: ../index.php?error=Lastname is required");
    }else if (empty($email)) {
        header("location: ../index.php?error=Email is required");
    }else if (empty($password)) {
        header("location: ../index.php?error=Password is required");
    }else {
        // register new user
        $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
        require('../../mysqli_connection.php');
        // make a query
        $query = "INSERT INTO users(userID, firstName, lastName, email, password)";
        $query .= "VALUES('', '$firstName', '$lastName', '$email', '$hashed_pwd')";

        $result = mysqli_query($con, $query);

        if ($result) {
            header("location: ../view.php?success=successfully created");
        }else {
            header("location: ../index.php?error=unknown error occured&$user_data");
        }

        
    }
}