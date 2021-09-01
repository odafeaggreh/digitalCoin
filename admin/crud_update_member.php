<?php 
    if (isset($_GET['id'])) {
        include 'mysqli_connection.php';
        function validate ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $id = validate($_GET['id']);
    
        $sql = "SELECT * FROM users WHERE userID=$id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $rows = mysqli_fetch_assoc($result);
        }else {
            header('location: member_view.php');
        }
    }else if (isset($_POST['update'])) {
        include 'mysqli_connection.php';
        function validate ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $firstName = validate($_POST['firstName']);
        $lastName = validate($_POST['lastName']);
        $totalbalance = validate($_POST['totalbalance']);
        $totaldeposit = validate($_POST['totaldeposit']);
        $profit = validate($_POST['profit']);
        $btcaddress = validate($_POST['btcaddress']);
        $plan = validate($_POST['plan']);
        $id = validate($_POST['id']);
    
    
        if (empty($firstName)) {
            header("location: member_update.php?id=$id&error=Firstname is required");
        }else if (empty($lastName)) {
            header("location: member_update.php?id=$id&error=Lastname is required");
        }
        // else if (empty($email)) {
        //     header("location: member_update.php?id=$id&error=Email is required");
        // }else if (empty($password)) {
        //     header("location: update.php?id=$id&error=Password is required");
        // }
        // else if (empty($totalbalance)) {
        //     header("location: member_update.php?id=$id&error=Total balance is required");
        // }else if (empty($totaldeposit)) {
        //     header("location: member_update.php?id=$id&error=Total deposit is required");
        // }
        // else if (empty($btcaddress)) {
        //     header("location: member_update.php?id=$id&error=btcaddress is required");
        // }
        else if (empty($plan)) {
            header("location: member_update.php?id=$id&error=Plan is required");
        }else {
            // register new user
            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
            require('mysqli_connection.php');
            // make a query
            $query = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', totalbalance='$totalbalance', totaldeposit='$totaldeposit',profit='$profit', btcaddress='$btcaddress', plan='$plan' WHERE userID=$id";
    
            $result = mysqli_query($con, $query);
    
            if ($result) {
                header("location: member_view.php?success=successfully Updated");
            }else {
                header("location: member_update.php?id=$id&error=unknown error occured&$user_data");
            }
    
            
        }
    }else{
        header('location: member_view.php');
    }

?>