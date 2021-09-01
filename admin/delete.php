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
        $sql = "DELETE FROM users WHERE userID=$id";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("location: view.php?success=successfully deleted");
        } else {
            header("location: view.php?error=unknown error occured");
        }
}else {
    header("location: view.php");
}