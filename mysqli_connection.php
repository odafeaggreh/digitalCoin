<?php

// define constants variables
define('DB_NAME', 'coin');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');






try{
    // connection var
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    



    // encoded language 
    mysqli_set_charset($con, 'utf8');
}catch (Exception $ex){
    print "An Exception occured. Messge:".$ex->getMessage();
}catch (Error $e){
    print "The system is busy, please try again later";
}


