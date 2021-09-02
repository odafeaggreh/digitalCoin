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
    
        $sql = "SELECT * FROM wallet_address WHERE userId=$id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $rows = mysqli_fetch_assoc($result);
        }else {
            header('location: wallet.php');
        }
    }else if (isset($_POST['update'])) {
        include 'mysqli_connection.php';
        function validate ($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        
        $btcaddress = validate($_POST['btcaddress']);
        $id = validate($_POST['id']);
    
    
        if (empty($btcaddress)) {
                header("location: wallet_update.php?id=$id&error=Wallet address is required");
        }else {
            // update details
            
            require('mysqli_connection.php');
            // make a query
            $query = "UPDATE wallet_address SET btc_address='$btcaddress' WHERE userId=$id";
    
            $result = mysqli_query($con, $query);
    
            if ($result) {
                header("location: wallet.php?success=successfully Updated");
            }else {
                header("location: wallet_update.php?id=$id&error=unknown error occured&$user_data");
            }
    
            
        }
    }else{
        header('location: wallet.php');
    }

?>