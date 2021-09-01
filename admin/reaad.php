<?php

include 'mysqli_connection.php';








$sql = "SELECT * FROM users ORDER BY userID DESC";
$result = mysqli_query($con, $sql);

