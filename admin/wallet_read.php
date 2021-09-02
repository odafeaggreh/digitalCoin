<?php

include 'mysqli_connection.php';








$sql = "SELECT * FROM wallet_address ORDER BY userId DESC";
$result = mysqli_query($con, $sql);