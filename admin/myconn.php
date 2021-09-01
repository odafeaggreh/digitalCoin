<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=coin','root','');
    }catch (PDOException $ex) {
        $ex->getMessage();
        
    }