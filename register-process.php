<?php
// require needed files


require('healper.php');

//error variable
$error = array();

$firstName = validate_input_text($_POST['firstname']);
if (empty($firstName)){
    $error[] = "You forgot to enter your first name";
    header('location: register.php?error=Please enter a first name');

}


$lastName = validate_input_text($_POST['lastname']);
if (empty($lastName)){
    $error[] = "You forgot to enter your last name";
    header('location: register.php?error=Please enter a last name');
}


$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your email";
    header('location: register.php?error=Please enter a email');
}


$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
    header('location: register.php?error=Please enter a password');
    
}


$confirm_pwd = validate_input_text($_POST['confirm_password']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to confirm your password";
    header('location: register.php?error=Please confirm your password');
}

if ($password !== $confirm_pwd) {
    $error[] = "Password does not match";
    header('location: register.php?error=Password does not match');
}


if (empty($error)){
    // register new user
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
    require('mysqli_connection.php');

    // make a query
    $query = "INSERT INTO users(userID, firstName, lastName, email, password)";
    $query .= "VALUES('', ?, ?, ?, ?)";

    // initialie statement
    $q = mysqli_stmt_init($con);

    // initialie mysqli prepared statement
    mysqli_stmt_prepare($q, $query);

    // bind parameters
    mysqli_stmt_bind_param($q, 'ssss', $firstName, $lastName, $email, $hashed_pwd);      

    // execute mysqli
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1){

        // start new session 
        session_start();

        // session variable
        $_SESSION['userID'] = mysqli_insert_id($con);



        // send welcome email
        // $mail = new PHPMailer();
        // $mail->isSMTP();
        // $mail->SMTPAuth = true;
        // $mail->SMTPSecure = 'ssl';
        // $mail->Host = 'smtp.gmail.com';
        // $mail->port = '465';
        // $mail->isHTML();
        // $mail->Username = 'digitalcryptocoin2@gmail.com';
        // $mail->Password = 'ouseibai';
        // $mail->setFrom('no-reply@dig.com');
        // $mail->Subject = 'hello world';
        // $mail->Body = 'test email';
        // $mail->addAddress('richardsonlyon911@gmail.com');

        // $mail->send();
        
        header("location: login.php?success=Sign up was successful, Please login with your details");
        exit();



    }else{
        
    }
}else{
    
}

