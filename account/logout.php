<?php
if(isset($_POST['logoutForm'])) {
    session_destroy();
    header('location: ../login.php');
}